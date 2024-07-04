#include <stdio.h>
#include <stdlib.h>

int main()
{
    printf("Hello world!\n");

    int a[100] = {4, 9, 1, 8, [0] = 5, 7};

    int b[100] = {4, 9, 1, 8, 7};
    b[0] = 5;

    int loop;

    for(loop = 0; loop < 6; loop++)
      printf("%d ", a[loop]);

    printf("\n");

    for(loop = 0; loop < 6; loop++)
      printf("%d ", b[loop]);

    return 0;
}
