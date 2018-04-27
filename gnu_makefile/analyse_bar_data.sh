#!/bin/bash
row=0
exec 3< sl_1.out
exec 4< sl_2.out
exec 5< sl_4.out
exec 6< sl_8.out
exec 7< sl_16.out

while IFS= read -r -u3 line1;
do
    IFS= read -r -u4 line2
    IFS= read -r -u5 line3
    IFS= read -r -u6 line4
    IFS= read -r -u7 line5
    num_elements=`echo $line1 | cut -d " " -f1 | bc`
    avg1=`echo $line1 | cut -d " " -f2 | bc`
    avg2=`echo $line2 | cut -d " " -f2 | bc`
    avg3=`echo $line3 | cut -d " " -f2 | bc`
    avg4=`echo $line4 | cut -d " " -f2 | bc`
    avg5=`echo $line5 | cut -d " " -f2 | bc`
    speedup1=`echo "scale=4 ; $avg1 / $avg1" | bc`
    speedup2=`echo "scale=4 ; $avg1 / $avg2" | bc`
    speedup3=`echo "scale=4 ; $avg1 / $avg3" | bc`
    speedup4=`echo "scale=4 ; $avg1 / $avg4" | bc`
    speedup5=`echo "scale=4 ; $avg1 / $avg5" | bc`

    if [ $row -eq 0 ]
    then
        echo $num_elements $speedup1 $speedup2 $speedup3 $speedup4 $speedup5 > bar_plot.out
        row=1
    elif [ $row -eq 1 ]
    then
        echo $num_elements $speedup1 $speedup2 $speedup3 $speedup4 $speedup5 >> bar_plot.out
    fi
done

exec 3<&-
exec 4<&-
exec 5<&-
exec 6<&-
exec 7<&-