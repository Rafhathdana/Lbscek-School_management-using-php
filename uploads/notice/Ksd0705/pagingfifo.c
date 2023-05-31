#include<stdio.h>
void main()
{
int n,ar[30],i,j,w,t,k,p,y,z,g,f;
printf("enter the number of frame:\n");
scanf("%d",&n);
printf("enter the page references limit\n");
scanf("%d",&t);
printf("enter the page references \n");
k=0;
p=0;
for(i=0;i<t;i++)
{
f=k;
scanf("%d",&w);
if(p<n)
{
for(j=0;j<n;j++)
{
if(w==ar[j])
{ k=k+1;
}
}
if(f==k)
{
ar[p]=w;
}
for(j=0;j<p+1;j++)
{
printf("process\t%d\n",ar[j]);
}
p=p+1;
}
else
{

for(j=0;j<n;j++)
{
if(w==ar[j])
{ k=k+1;
}
}
if(f==k)
{
y=p;
g=y-n-k;
ar[g]=w;
}
for(j=0;j<n;j++)
{
printf("process\t%d\n",ar[j]);
}
p=p+1;
}
}
z=p-k;
printf("page hit= =%d",k);
printf("page fault= =%d",z);
}
