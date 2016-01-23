#include <stdio.h>

main(){
	int n,i,j;
	printf("Enter no of process:");
	scanf("%d",&n);
	int at[n],et[n],wt[n],ft[n];
	int ct=0;
	for(i=0;i<n;i++){
		scanf("%d%d",&at[i],&et[i]);
		ft[i]=0,wt[i]=0;	
	}
	for(i=0;i<n;i++)
	{
		for(j=0;j<n;j++)
		{
			if(at[i]<at[j])
			{
				int temp1=at[i];
				int temp2=et[i];
				at[i]=at[j];
				et[i]=et[j];
				at[j]=temp1;
				et[j]=temp2;
			}
		}
	}
	for(i=0;i<n;i++){
		if(ct<at[i]){
			ct+=(at[i]-ct);
			i--;
			continue;
		}
		
		else{
			wt[i]=ct-at[i];
			ct+=et[i];
			ft[i]=ct;
		}
	}
	printf("---------------------\n");
	printf("\t|WT\t|FT\t|\n");
	printf("---------------------\n");
	for(i=0;i<n;i++)
	{
		printf("\t%d\t%d\t|\n",wt[i],ft[i]);
	}
	printf("---------------------\n");
	
	
}
