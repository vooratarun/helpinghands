#include<stdio.h>
main()
{
	int p,r,i,j,k;
	scanf("%d %d",&p,&r);
	int Allocation[p][r],Need[p][r],Max[p][r],Avail[r],Finish[p],SafeSeq[p];
	printf("Enter the Available Resources:\n");
	for( i=0;i<r;i++)
	{
			scanf("%d",&Avail[i]);
	}	
	printf("Enter the Allocation matrix:\n");
	for(i=0;i<p;i++)
	{
		for(j=0;j<r;j++)
		{
			scanf("%d",&Allocation[i][j]);
		}
		Finish[i]=0;	
	}
	printf("Enter the Maximum demand matrix:\n");
	for(i=0;i<p;i++)
	{
		for(j=0;j<r;j++)
		{
			scanf("%d",&Max[i][j]);
			Need[i][j]=Max[i][j]-Allocation[i][j];
		}	
	}
	int index = 0 ;
	while(1){
		int dead = 0	;
		for(i=0;i<p;i++)
		{
			if((check(p,r,Avail,Need,i)) && (Finish[i] == 0))
			{
				Finish[i] = 1	; 
				for(j = 0 ; j < r ;j++)
					Avail[j] = Avail[j] + Allocation[i][j] ;
				SafeSeq[index++] = i	;
				dead = 1	;		
			}	
		}
		if(dead == 0){
			printf("Deadlock occurs\n")	;
			break	;
		}
		if(index == p){
			printf("Safe sequence < ")	;
			for(k = 0 ; k < p ; k ++)
				printf("p%d ",SafeSeq[k]) ;
			printf(">\n")	;
			break	;
		}
	}
}
int check(int m,int n,int a[n],int b[m][n],int k)
{	
	int i,j=0;
	for(i=0;i<n;i++)
	{
		if(a[i]>=b[k][i])
		{
			j++;
		}	
	}
	if(j==n)
	{
		return 1;
	}
	return 0;	
}
