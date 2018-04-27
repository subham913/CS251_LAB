#!/bin/bash
row=0
while read num_elements;
do
	while read num_threads;
	do
		for (( c=1; c<=100; c++ ))
		do  
   			op=`./app "$num_elements" "$num_threads"`
   			time=`echo $op | cut -d " " -f4 | bc`
   			if [ $row -eq 0 ]
   			then	
				echo $num_threads $num_elements $time > output.out
				row=1
			elif [ $row -eq 1 ]
			then 
				echo $num_threads $num_elements $time >> output.out
			fi

		done
	done < <(tr ' ' '\n' < threads.txt)
done < <(tr ' ' '\n' < params.txt)