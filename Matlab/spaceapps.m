
clc
fprintf('\n \n     Target A: Estimate Global Disaster Mortality    \n')
fprintf(' \n The following table lists the indicators recommended by the OIEWG \n ')


fprintf('\n A1= Number of deaths and missing persons attributed to disasters, per 100,000 population. \n ')
disp('A2= Number of deaths attributed to disasters, per 100,000 population.')
disp(' A3= Number of missing persons attributed to disasters, per 100,000 population.')

fprintf('\n \n Now, The formula for calculating the compound indicator is: \n \n \t \t A1=((A2a+A3a)/population)*100,000 \n ')
fprintf('\n Where, \n A1= Number of deaths and missing persons attributed to disasters, per 100,000 population.\n')
disp(' A2a:Number of deaths attributed to disasters')
disp(' A3a : Number of missing persons attributed to disasters')
disp(' Population: Represented population.')
fprintf(' \n Note that the above formula can be derived from : \n \n')
fprintf(' \t A2=((A2a/population)*100,000 \n \n \t A3=((A3a/population)*100,000 \n')
fprintf('\n \t A1=A2+A3\n ')
fprintf('********************************INTRODUCTION******************************* \n')

fprintf('\n This is the "Target A: Estimate Global Disaster Mortality for Bangladesh" \n')


disp('Calculating value of A1 for differents years, Here a1 represents A1 similarly a2 .. A2.')

A12a=405;
A13a=0;
population1=8325666;
a1=((A12a+A13a)/population1)*100000
A12=(A12a/population1)*100000;
A13=(A13a/population1)*100000;

A22a=1;
A23a=0;
population2=1000000;
a2=((A22a+A23a)/population2)*100000
A22=(A22a/population2)*100000;
A23=(A23a/population2)*100000;

A32a=17;
A33a=0;
population3=5000000;
a3=((A32a+A33a)/population3)*100000
A32=(A32a/population3)*100000;
A13=(A33a/population3)*100000;

A42a=0;
A43a=0;
population4=1000;
a4=((A42a+A43a)/population4)*100000
A42=(A42a/population4)*100000;
A43=(A43a/population4)*100000;

A52a=16;
A53a=0;
population5=1500000;
a5=((A52a+A53a)/population5)*100000
A52=(A52a/population5)*100000;
A53=(A53a/population5)*100000;

A62a=149;
A63a=0;
population6=9000000;
a6=((A62a+A63a)/population6)*100000
A62=(A62a/population6)*100000;
A63=(A63a/population6)*100000;

A72a=0;
A73a=0;
population7=1000000;
a7=((A72a+A73a)/population7)*100000
A72=(A72a/population7)*100000;
A73=(A73a/population7)*100000;


setOfA1=[a1 a2 a3 a4 a5 a6 a7]
year=[ 2007 2009 2014 2015 2016 2017 2020]
plot(year, setOfA1)
title(' Year  vs  Number of deaths and missing persons attributed to disasters')
xlabel(' Year')
ylabel('Number of deaths and missing persons')


disp('****************************YOUR LOCATION****************************')
disp(' Now its for your locations')
fprintf(' \n Input data to calculate A1, \n Firstly put the value of ')
A2a= input(' A2a= ')
A3a= input(' Second A3a= ')
population= input('population= ')
A1=((A2a+A3a)/population)*100000 
A2=(A2a/population)*100000;
A3=(A3a/population)*100000; 






