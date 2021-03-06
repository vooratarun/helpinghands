/*
Program: FCFS Scheduling
Author: V.Madhu N090435
class: CSE-01
*/
#include <stdio.h>
main(){
	int n,i,j,pc=0,t=1;
	printf("Enter no of process:");
	scanf("%d",&n);
	int at[n],et[n],wt[n],ft[n],pf[n],tt[n],eet[n],eat[n];
	int ct=0,x=0,d;
	for(i=0;i<n;i++){
		scanf("%d%d",&at[i],&et[i]);
		eet[i]=et[i];
		ft[i]=0,wt[i]=0;pf[i]=0;	
	}
	//sorting processes based on arrival time
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
	for(i=0;i<n;i++)
	{
		eet[i]=et[i];eat[i]=at[i];
	}
	//loop goes until all processes are finished
	while(pc!=n){
		if(!pf[x]){
			if(at[x]>ct){
				ct+=(at[x]-ct);
				continue;
			}
			else{
				if(et[x]<= t){
					wt[x]+=ct-at[x];
					ct+=et[x];
					et[x]=0;
					ft[x]=ct;
					pf[x]=1;
					
					x++;
					x=x%n;
					pc++;	
				}
				else{
					wt[x]+=ct-at[x];
					ct+=t;
					et[x]-=t;
					at[x]=ct;
					d=(at[(x+1)%n])-ct;
					if(d>0){
						x=0;
						continue;
					}
					int min=et[0];
					for(i=0;i<n;i++){
						if(et[i]<=min && et[i]!=0 && at[i]<=ct){
							x=i;
						}
					}
				}
				
				
			}
		}
		else{
			x++;
			x=x%n;
		}
	}
printf("---------------------------------------------------------------------------\n");
	printf("|\tAT\t|\tET\t|\tWT\t|\tFT\t|\tTT\t\n");
	printf("---------------------------------------------------------------------------\n");
	for(i=0;i<n;i++)
	{
		tt[i]=wt[i]+eet[i];
		printf("|\t%d\t|\t%d\t|\t%d\t|\t%d\t|\t%d\t\n",eat[i],eet[i],wt[i],ft[i],tt[i]);
	}
	printf("---------------------------------------------------------------------------\n");
}
