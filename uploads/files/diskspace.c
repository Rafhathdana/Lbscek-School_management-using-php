
#include<stdio.h>
void main()
{
int n,bt[20],wt[20],i,j,nm,m;
float avgwt=0,sum,fm;
printf("enter the number of process:\n");
scanf("%d",&n);
printf("enter the process process\n");
for(i=0;i<n;i++)
{
printf("p[%d]=",i+1);
scanf("%d",&bt[i]);
}
printf("enter the starting head position\n");
scanf("%d",&nm);

wt[0]=nm;
for(i=0;i<n;i++)
{
for(j=i+1;j<=i+1;j++)
{
wt[j]=bt[i];
}
}

printf("proccess way\n");
for(i=0;i<=n;i++)
{
printf("\t%d",wt[i]);
}
sum=0;

for(i=0;i<n;i++)
{
for(j=i+1;j<=i+1;j++)
{

fm=wt[j]-wt[i];
if(fm <= 0) 
{
fm=-1*fm;
}
sum=sum+fm;
}}
m=n+1;
printf("\ntotal time =%f",sum);
sum=sum/m;

printf("\naverage time =%f",sum);
}
