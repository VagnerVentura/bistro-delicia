#!/bin/bash
echo -n 'Entre com o primeiro nro: '
read N1
echo -n 'Entre com o segundo nro: '
read N2
diferenca=$((N1 - N2))
if [ "$diferenca" -lt 0 ]
then
 modulo=$(( -1 * diferenca ))
else
 modulo="$diferenca"
fi
echo "Diferenca entre a média e o DP: $modulo"
