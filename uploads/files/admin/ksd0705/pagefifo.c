#include<stdio.h>
#include<stdlib.h>
void main()
{
int a[10],count=0,i,j,k,n,m;
printf("Enter Number of frames= ");
scanf("%d",&m);
printf("Enter Number of Pages=  ");
scanf("%d",&n);
printf("Enter values of Reference String=\n");
for(i=0;i<n;i++)
{              
scanf("%d",&a[i]);
}
int fr[m];
for(i=0;i<m;i++)
{
fr[i]=-1;
}
for(i=0;i<n;i++)
{
k=0;
for(j=0;j<m;j++)
{
if(a[i]==fr[j])
{
k++;
count--;
}   
}     
count++;
if(count<=m && k==0)
{
fr[i]=a[i];
}   
else if(k==0)
{
fr[(count-1)%m]=a[i];
} 
for(j=0;j<m;j++)
{
printf("   ");       
printf("%d ",fr[j]);
}
printf("\n");
} 
printf("\n\nTotal Page Faults %d\n",count);
printf("Total Page hits %d\n\n\n",n-count);
} 
