#!/bin/bash
echo 'Gorjetas das Mulheres'
if [ ! -f go.csv ]
then
    echo 'Arquivo não encontrado.'
    exit 1
fi
awk -F',' '$3 == "Feminino" {print "Gorjeta: " $2}' go.csv
