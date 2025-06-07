#!/bin/bash

# Arquivo CSV
ARQ="gorjetas.csv"

# Extrai apenas os valores da coluna "Gorjeta", ignorando o cabeçalho
gorjetas=$(tail -n +2 "$ARQ" | awk -F',' '{print $2}')

# Conta número de registros
n=$(echo "$gorjetas" | wc -l)

# Soma total de gorjetas
soma=0
for g in $gorjetas; do
    soma=$(echo "$soma + $g" | bc)
done

# Calcula média
media=$(echo "scale=2; $soma / $n" | bc)

# Calcula desvio padrão
soma_quad=0
for g in $gorjetas; do
    diff=$(echo "$g - $media" | bc)
    diff_quad=$(echo "$diff * $diff" | bc)
    soma_quad=$(echo "$soma_quad + $diff_quad" | bc)
done
variancia=$(echo "scale=2; $soma_quad / $n" | bc)
dp=$(echo "scale=2; sqrt($variancia)" | bc -l)

# Calcula módulo da diferença (Média - DP)
diferenca=$(echo "$media - $dp" | bc)
if [[ $(echo "$diferenca < 0" | bc) -eq 1 ]]; then
    DMDP=$(echo "$diferenca * -1" | bc)
else
    DMDP=$diferenca
fi

# Mostra média, DP e DMDP
echo "==== Estatísticas ===="
echo "Média das gorjetas: $media"
echo "Desvio padrão (DP): $dp"
echo "Diferença (Média - DP) em módulo: $DMDP"
echo "======================"
echo ""

# Prepara as tabelas
echo "==== Gorjetas ABAIXO da DMDP ===="
head -n 1 "$ARQ"

tail -n +2 "$ARQ" | while IFS=',' read -r total conta sexo fumante dia refeicao qtd; do
    if [[ $(echo "$conta < $DMDP" | bc) -eq 1 ]]; then
        echo "$total,$conta,$sexo,$fumante,$dia,$refeicao,$qtd"
    fi
done

echo ""
echo "==== Gorjetas IGUAIS ou ACIMA da DMDP ===="
head -n 1 "$ARQ"

tail -n +2 "$ARQ" | while IFS=',' read -r total conta sexo fumante dia refeicao qtd; do
    if [[ $(echo "$conta >= $DMDP" | bc) -eq 1 ]]; then
        echo "$total,$conta,$sexo,$fumante,$dia,$refeicao,$qtd"
    fi
done
