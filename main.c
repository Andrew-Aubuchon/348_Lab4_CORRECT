#include "isEven.h"
#include "isOdd.h"
#include <stdio.h>

int main() {
    int num;
    printf("Enter an integer: ");
    scanf("%d", &num);

    // Call both checkers
    isEven(num);
    isOdd(num);

    return 0;
}
