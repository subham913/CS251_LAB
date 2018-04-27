set term postscript eps enhanced monochrome 20 dashed dashlength 1 lw 1.5
set terminal postscript eps enhanced color
set key samplen 2 spacing 1 font ",22"
set xtics font ",22"
set ytics font ",22"
set ylabel font ",25"
set xlabel font ",25"
set xlabel "No. of Elements"
set ylabel "In microseconds"
set yrange[0:]
set xrange[0:2000000]
set ytic auto
set xtic auto
set output "Threadscatter_1.eps"
plot 'Threadscatter_1.out' using 1:2 title "Thread1" with points pt 1 ps 1.5

set output "Threadscatter_2.eps"
plot 'Threadscatter_2.out' using 1:2 title "Thread2" with points pt 1 ps 1.5


set output "Threadscatter_4.eps"
plot 'Threadscatter_4.out' using 1:2 title "Thread4" with points pt 1 ps 1.5


set output "Threadscatter_8.eps"
plot 'Threadscatter_8.out' using 1:2 title "Thread8" with points pt 1 ps 1.5


set output "Threadscatter_16.eps"
plot 'Threadscatter_16.out' using 1:2 title "Thread16" with points pt 1 ps 1.5



