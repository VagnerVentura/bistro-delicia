#!/bin/bash
ARQUIVO="gorjetas.csv"
# Verifica se o arquivo existe
if [[ ! -f "$ARQUIVO" ]]; then
    echo "Arquivo $ARQUIVO não encontrado!"
    exit 1
fi

# Extrai a coluna "Gorjeta" ignorando o cabeçalho
gorjetas=($(tail -n +2 "$ARQUIVO" | cut -d',' -f2))

# Cria um array associativo para contar a frequência
declare -A freq

# Conta as ocorrências de cada gorjeta
for gorjeta in "${gorjetas[@]}"; do
    freq[$gorjeta]=$((freq[$gorjeta]+1))
done

# Encontra a maior frequência
max_freq=0
for count in "${freq[@]}"; do
    if (( "$count" > "$max_freq" )); then
        max_freq=$count
    fi
done

# Exibe as gorjetas com frequência máxima (moda)
echo "Moda(s) da Gorjeta:"

for gorjeta in "${!freq[@]}"; do
    if (( ${freq[$gorjeta]} == max_freq )); then
        echo "$gorjeta (ocorreu $max_freq vezes)"
    fi
done

echo '

