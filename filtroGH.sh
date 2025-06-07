#!/bin/bash
echo 'Gorjetas dos Homens'
if [ ! -f go.csv ]
then
    echo 'Arquivo não encontrado.'
    exit 1
fi
awk -F',' '$3 == "Masculino" {print "Gorjeta: " $2}' go.csv
