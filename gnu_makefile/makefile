all:report.pdf

report report.pdf:report.tex Threadscatter_1.eps Threadscatter_2.eps Threadscatter_4.eps Threadscatter_8.eps Threadscatter_16.eps sl_1.eps bar_plot.eps ebar_plot.eps
	pdflatex report.tex
plot:plot_scatter.p plot_line.p plot_bar.p plot_ebar.p Threadscatter_1.out Threadscatter_2.out Threadscatter_4.out Threadscatter_8.out Threadscatter_16.out sl_1.out sl_2.out sl_4.out sl_8.out sl_16.out bar_plot.out ebar_plot.out
	gnuplot plot_scatter.p
	gnuplot plot_line.p
	gnuplot plot_bar.p
	gnuplot plot_ebar.p
plot_scatter.p Threadscatter_1.eps Threadscatter_2.eps Threadscatter_4.eps Threadscatter_8.eps Threadscatter_16.eps:Threadscatter_1.out Threadscatter_2.out Threadscatter_4.out Threadscatter_8.out Threadscatter_16.out
	gnuplot plot_scatter.p
plot_line.p sl_1.eps:sl_1.out sl_2.out sl_4.out sl_8.out sl_16.out
	gnuplot plot_line.p
plot_bar.p bar_plot.eps:bar_plot.out
	gnuplot plot_bar.p
plot_ebar.p ebar_plot.eps:ebar_plot.out
	gnuplot plot_ebar.p

analyse Threadscatter_1.out Threadscatter_2.out Threadscatter_4.out Threadscatter_8.out Threadscatter_16.out sl_1.out sl_2.out sl_4.out sl_8.out sl_16.out bar_plot.out ebar_plot.out:output.out analyse_scatter_data.sh analyse_line_data.sh analyse_bar_data.sh analyse_errorbar_data.sh
	./analyse_scatter_data.sh
	./analyse_line_data.sh
	./analyse_bar_data.sh
	./analyse_errorbar_data.sh

runtest output.out:app params.txt runtest.sh
	./runtest.sh
app:prog.o thread_function.o common.h
	gcc -o app thread_function.o prog.o -lm -lpthread
prog.o:prog.c common.h
	gcc -c prog.c -o prog.o
thread_function.o:thread_function.c common.h
	gcc -c thread_function.c -o thread_function.o
clean:
	rm -f *.o app *.out *.eps *.pdf *.lof *.log *.epf *.aux
