#!/bin/bash
row_1=0
row_2=0
row_4=0
row_8=0
row_16=0
for i in 1 2 4 8 16
do
	prev_num=-1;
	sum=0;
	counter=0;

	while read line;
	do
		num_elements=`echo $line | cut -d " " -f1 | bc`
		time=`echo $line | cut -d " " -f2 | bc`
		if [ $num_elements -ne $prev_num ]
		then
			if [ $prev_num -ne -1 ]
			then
				average=`echo "scale=3 ; $sum / $counter" | bc`
				if [ $i -eq 1 ]
				then
					if [ $row_1 -eq 0 ]
					then
						echo $prev_num $average > sl_$i.out
						row_1=1
				    elif [ $row_1 -eq 1 ]
				    then
				    	echo $prev_num $average >> sl_$i.out
				    fi
				elif [ $i -eq 2 ]
				then 
					if [ $row_2 -eq 0 ]
					then
						echo $prev_num $average > sl_$i.out
						row_2=1
				    elif [ $row_2 -eq 1 ]
				    then
				    	echo $prev_num $average >> sl_$i.out
				    fi
				elif [ $i -eq 4 ]
				then 
					if [ $row_4 -eq 0 ]
					then
						echo $prev_num $average > sl_$i.out
						row_4=1
				    elif [ $row_4 -eq 1 ]
				    then
				    	echo $prev_num $average >> sl_$i.out
				    fi
				elif [ $i -eq 8 ]
				then
					if [ $row_8 -eq 0 ]
					then
						echo $prev_num $average > sl_$i.out
						row_8=1
				    elif [ $row_1 -eq 1 ]
				    then
				    	echo $prev_num $average >> sl_$i.out
				    fi
				elif [ $i -eq 16 ]
				then 
					if [ $row_16 -eq 0 ]
					then
						echo $prev_num $average > sl_$i.out
						row_16=1
				    elif [ $row_16 -eq 1 ]
				    then
				    	echo $prev_num $average >> sl_$i.out
				    fi 
				fi   
			fi
			prev_num=$num_elements
			sum=0
			counter=0
		fi
		sum=$((sum + time))
		counter=$((counter + 1))
	done < Threadscatter_$i.out

	if [ $counter -ne 0 ]
	then
		average=`echo "scale=3 ; $sum / $counter" | bc`
		if [ $prev_num -ne -1 ]
			then
				average=`echo "scale=3 ; $sum / $counter" | bc`
				if [ $i -eq 1 ]
				then
					if [ $row_1 -eq 0 ]
					then
						echo $prev_num $average > sl_$i.out
						row_1=1
				    elif [ $row_1 -eq 1 ]
				    then
				    	echo $prev_num $average >> sl_$i.out
				    fi
				elif [ $i -eq 2 ]
				then 
					if [ $row_2 -eq 0 ]
					then
						echo $prev_num $average > sl_$i.out
						row_2=1
				    elif [ $row_2 -eq 1 ]
				    then
				    	echo $prev_num $average >> sl_$i.out
				    fi
				elif [ $i -eq 4 ]
				then 
					if [ $row_4 -eq 0 ]
					then
						echo $prev_num $average > sl_$i.out
						row_4=1
				    elif [ $row_4 -eq 1 ]
				    then
				    	echo $prev_num $average >> sl_$i.out
				    fi
				elif [ $i -eq 8 ]
				then
					if [ $row_8 -eq 0 ]
					then
						echo $prev_num $average > sl_$i.out
						row_8=1
				    elif [ $row_1 -eq 1 ]
				    then
				    	echo $prev_num $average >> sl_$i.out
				    fi
				elif [ $i -eq 16 ]
				then 
					if [ $row_16 -eq 0 ]
					then
						echo $prev_num $average > sl_$i.out
						row_16=1
				    elif [ $row_16 -eq 1 ]
				    then
				    	echo $prev_num $average >> sl_$i.out
				    fi 
				fi  
			fi	
	fi

	prev_num=-1;
	sum=0;
	counter=0;
done
