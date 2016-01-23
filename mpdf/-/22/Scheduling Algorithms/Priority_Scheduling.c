#include<stdio.h>
int n,pqin,pqout;
struct p_info
{
	int extime,artime,qintime,qouttime,state,et,pri;
};
void makequeue(struct p_info arr[n])			//sorting with bubble sort
{
	int i=0,j=0;
	struct p_info temp;
	for(i=0;i<n;i++)
	{
		for(j=0;j<n-1;j++)
		{
			if(arr[j].artime>arr[j+1].artime)
			{
				temp.extime=arr[j].extime;		temp.artime=arr[j].artime;	temp.et=arr[j].et; temp.pri=arr[j].pri ;
				arr[j].extime=arr[j+1].extime;	arr[j].artime=arr[j+1].artime;	arr[j].et=arr[j+1].et;	arr[j].pri=arr[j+1].pri;
				arr[j+1].extime=temp.extime;	arr[j+1].artime=temp.artime;	arr[j+1].et=temp.et;  arr[j+1].pri=temp.pri;
			}
		}
	}
	arr[0].qintime=arr[0].artime;					pqin=arr[0].qintime;
	arr[0].qouttime=arr[0].artime+arr[0].extime;	pqout=arr[0].qouttime;
	arr[0].state=0;		arr[0].et=0	;				
	pqin=pqout;
	
	int x=findmin(arr,arr[0].qouttime);					//running  from second process;
	for(i=1;i<n;i++)
	{
		if(x!=-1)										// found with min ex.time with in pqout time
		{	
			arr[x].qintime=pqin;
			arr[x].qouttime=pqin+arr[x].extime;
			arr[x].et,arr[x].state=0;
			pqout=arr[x].qouttime;
			i=1;
		}
		else											// if not found running first of other process and eliminating ideal times
		{
			if(arr[i].state)
			{
				arr[i].qintime=arr[i].artime;
				pqin=arr[i].artime;
				arr[i].qouttime=pqin+arr[i].extime;
				arr[i].et,arr[i].state=0;
				pqout=arr[i].qouttime;
			}
		}
		pqin=pqout;
		x=findmin(arr,pqout);
	}
}
int findmin(struct p_info arr[n],int qout)
{
	int min=-1,i,x=0;
	for (i=1;i<n;i++)
	{
		if(arr[i].state)						//if process has to be run
		{
			if(arr[i].artime<=qout)				
			{
				if(min==-1 || min>arr[i].pri)
				{		min=arr[i].pri;		x=i; 		}
			}	
		}
	}
	if(x==0)
		return -1;								// all the process had done return -1 
	return x;									
}
main()
{
	int ext,art,i,pr;
	printf("Enter No.of Processes:- ");
	scanf("%d",&n);
	struct p_info plist[n];
	printf("Ex.T\tAr.T\tPri\n");
	for (i=0;i<n;i++)							//scanning inputs
	{
		scanf("%d %d %d",&ext,&art,&pr);
		plist[i].extime=ext;
		plist[i].artime=art;	
		plist[i].pri=pr;
		plist[i].state=1;
		plist[i].et=ext;
	}
	makequeue(plist);							//calling Grant Chart
	
	printf("Ex.T\tAr.T\tIn.T\t Out.T\t W T\t TAT\n");
	for (i=0;i<n;i++)
	{	int waittime=plist[i].qintime-plist[i].artime;
		printf("%d\t %d\t %d\t %d\t %d\t %d\n",plist[i].extime,plist[i].artime,plist[i].qintime,plist[i].qouttime,waittime,plist[i].extime+waittime);
	}
}
