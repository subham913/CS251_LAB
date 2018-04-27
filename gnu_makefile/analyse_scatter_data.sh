#!/bin/bash
row1=0;
row2=0;
row4=0;
row8=0;
row16=0;
while read line;
do
	thread=`echo $line | cut -d " " -f1 | bc`
	num_elements=`echo $line | cut -d " " -f2 | bc`
	time=`echo $line | cut -d " " -f3 | bc`
	
	if [ $thread -eq 1 ]
	then
		if [ $row1 -eq 0 ]
		then
			echo $num_elements $time > Threadscatter_1.out
			row1=1

		elif [ $row1 -eq 1 ]
		then
			echo $num_elements $time >> Threadscatter_1.out
		fi
	fi

	if [ $thread -eq 2 ]
	then
		if [ $row2 -eq 0 ]
		then
			echo $num_elements $time > Threadscatter_2.out
			row2=1

		elif [ $row2 -eq 1 ]
		then
			echo $num_elements $time >> Threadscatter_2.out
		fi
	fi

	if [ $thread -eq 4 ]
	then
		if [ $row4 -eq 0 ]
		then
			echo $num_elements $time > Threadscatter_4.out
			row4=1

		elif [ $row4 -eq 1 ]
		then
			echo $num_elements $time >> Threadscatter_4.out
		fi
	fi

	if [ $thread -eq 8 ]
	then
		if [ $row8 -eq 0 ]
		then
			echo $num_elements $time > Threadscatter_8.out
			row8=1

		elif [ $row8 -eq 1 ]
		then
			echo $num_elements $time >> Threadscatter_8.out
		fi
	fi

	if [ $thread -eq 16 ]
	then
		if [ $row16 -eq 0 ]
		then
			echo $num_elements $time > Threadscatter_16.out
			row16=1

		elif [ $row16 -eq 1 ]
		then
			echo $num_elements $time >> Threadscatter_16.out
		fi
	fi
done < output.out