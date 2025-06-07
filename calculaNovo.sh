#!/bin/bash

# Nome do arquivo de entrada
arquivo="go.csv"

# Inicializa as variáveis
soma=0
contador=0
soma_diferencas_quadradas=0

# Lê cada linha do arquivo
while IFS=, read -r coluna1 coluna2 coluna3 coluna4
do
    # Ignora a primeira linha (caso tenha cabeçalho)
    if [[ "$coluna2" != "Gorjeta" ]]; then
        # Adiciona o valor da segunda coluna à soma
        soma=$(echo "$soma + $coluna2" | bc)
        contador=$((contador + 1))
    fi
done < "$arquivo"

# Calcula a média
media=$(echo "scale=2; $soma / $contador" | bc)
contador=0

# Calcula a soma das diferenças quadradas
while IFS=, read -r coluna1 coluna2 coluna3 coluna4
do
    if [[ "$coluna2" != "Gorjeta" ]]; then
        # Adiciona à soma das diferenças quadradas
        soma_diferencas_quadradas=$(echo "$soma_diferencas_quadradas + ($coluna2 - $media)^2" | bc)
        contador=$((contador + 1))
    fi
done < "$arquivo"

# Calcula o desvio padrão
desvio_padrao=$(echo "scale=2; sqrt($soma_diferencas_quadradas / $contador)" | bc)

# Exibe os resultados
echo "Total das gorjetas: $soma"
echo "Média: $media"
echo "Desvio Padrão: $desvio_padrao"
