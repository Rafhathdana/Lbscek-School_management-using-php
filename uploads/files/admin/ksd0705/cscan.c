#include<stdio.h>
void main()
{
 int p[20],r[20],le[20],ri[20],temp,i,seek,j,n,s,h,avseek,cr=0,cl=0;
 printf("enter the no of requests=");
 scanf("%d",&n);
 printf("enter the size of the disc=");
 scanf("%d",&s);
 
 printf("enter the requests between 0 and %d\n",s-1);
 for(i=0;i<n;i++) 
 {
 scanf("%d",&r[i]);
 }
 printf("enter the initial head=");
 scanf("%d",&h);
 p[0]=h;
 printf("-------------------------------------\n");
 for(i=1;i<=n;i++)
 {
  p[i]=r[i-1];
 }
 /*for(i=0;i<=n;i++)
 {
  printf("%d\n",p[i]);
 }*/
 
 for(i=0;i<=n;i++)
 {
  if(p[i]>=h)
  {
    ri[cr]=p[i];
    cr=cr+1;   
  }
  else
  {
   le[cl]=p[i];
   cl=cl+1;
  }
 }
 
 // sorting left side
 for(i=0;i<cl;i++)
 {
  for(j=0;j<(cl-i-1);j++)
  {
   if(le[j]>le[j+1])
   {
    temp=le[j];
    le[j]=le[j+1];
    le[j+1]=temp;
   }
  }
 }
 
 
 // sorting right side
 for(i=0;i<cr;i++)
 {
  for(j=0;j<(cr-i-1);j++)
  {
   if(ri[j]>ri[j+1])
   {
    temp=ri[j];
    ri[j]=ri[j+1];
    ri[j+1]=temp;
   }
  }
 }
 
 printf("-------------------------------------------\n");
 printf("the movement >>>\n");
 for(i=0;i<cr;i++)
 {
  printf("%d\t",ri[i]);
 }
 printf("%d\t",s-1);
 printf("0\t");
 for(i=0;i<cl;i++)
 {
  printf("%d\t",le[i]);
 }
 
 seek=(s-1-h)+(s-1)+(le[cl-1]);
 printf("\nseek time=%d\n",seek);
 avseek=seek/n;
 printf("average seek time=%d\n",avseek);
 

 
 
}
