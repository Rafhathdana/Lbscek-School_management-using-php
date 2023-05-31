#include<stdio.h>
int main()
{
	int tq;
	int i,p[30],bt[30],n;
	int rembt[30],t=0;
	printf("Enter no. of processes : ");
	scanf("%d",&n);
	printf("Enter Burst times\n");
	for(i=0;i<n;i++)
	{
		printf("P[%d] : ",i+1);
		scanf("%d",&bt[i]);
		rembt[i]=bt[i];
	}
	printf("Enter Time Quantum : ");
	scanf("%d",&tq);
	int wt[30],tat[30],twt=0,ttat=0;
	wt[0]=0;
	int done=0;
	float a,b;
	while(done==0)
	{
		done=1;
		for(i=0;i<n;i++)
		{
			if(rembt[i]>0)
			{
				done=0;
				if(rembt[i]>tq)
				{
					t+=tq;
					rembt[i]-=tq;
				}
				else
				{
					t+=rembt[i];
					wt[i]=t-bt[i];
					rembt[i]=0;
				}
			}	
		}
		if(done==1)
		break;
	}
	twt=0;
	for(i=0;i<n;i++)
	{
		tat[i]=bt[i]+wt[i];
		ttat=ttat+tat[i];	
		twt=twt+wt[i];
	}
	a=twt/n;
	b=ttat/n;
	printf("\n");
	printf("Process\t\t|\tB T\t|\tW T\t|\tT A T\n");		
	printf("--------------------------------------------------------------\n");	
	for(i=0;i<n;i++)
	{
		printf("%d",i);
		printf("\t\t|\t%d",bt[i]);
		printf("\t|\t%d",wt[i]);
		printf("\t|\t%d\n",tat[i]);
	}
	printf("Average Waiting Time : %f\n",a);
	printf("Average turnaround Time : %f",b);
	printf("\n");
}
