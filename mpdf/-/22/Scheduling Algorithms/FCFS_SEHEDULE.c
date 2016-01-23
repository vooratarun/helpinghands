#include<stdio.h>
int n;
struct p_info
{
	int extime,artime,qintime,qouttime;
};
void makequeue(struct p_info arr[n])
{
	int i=0,j=0;
	struct p_info temp;
	for(i=0;i<n;i++)
	{
		for(j=0;j<n-1;j++)
		{
			if(arr[j].artime>arr[j+1].artime)
			{
				temp.extime=arr[j].extime;		temp.artime=arr[j].artime;
				arr[j].extime=arr[j+1].extime;	arr[j].artime=arr[j+1].artime;
				arr[j+1].extime=temp.extime;		arr[j+1].artime=temp.artime;	
			}
		}
	}
	arr[0].qintime=arr[0].artime;
	arr[0].qouttime=arr[0].artime+arr[0].extime;
	for(i=1;i<n;i++)
	{
		if(arr[i-1].qouttime<arr[i].artime)
		{
			arr[i].qintime=arr[i].artime;
		}
		else
		{
			arr[i].qintime=arr[i-1].qouttime;
		}
		arr[i].qouttime=arr[i].qintime+arr[i].extime;
	}
}
main()
{
	int ext,art,i;
	printf("Enter No.of Processes:- ");
	scanf("%d",&n);
	struct p_info plist[n];
	printf("Ex.Time\tAr.Time\n");
	for (i=0;i<n;i++)
	{
		scanf("%d %d",&ext,&art);
		plist[i].extime=ext;
		plist[i].artime=art;
		plist[i].qintime=NULL;
		plist[i].qouttime=NULL;
	}
	makequeue(plist);
	
	printf("Ex.T\tAr.T\tIn.T\t Out.T\t W T\t TAT\n");
	for (i=0;i<n;i++)
	{	int waittime=plist[i].qintime-plist[i].artime;
		printf("%d\t %d\t %d\t %d\t %d\t %d\n",plist[i].extime,plist[i].artime,plist[i].qintime,plist[i].qouttime,waittime,plist[i].extime+waittime);
	}

}
