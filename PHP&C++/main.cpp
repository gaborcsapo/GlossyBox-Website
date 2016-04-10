//
//  main.cpp
//  for Glossybox
//
//  Created by Gabor Csapo on 4/10/16.
//  Copyright © 2016 Gabor Csapo. All rights reserved.
//
#include <cstdlib>
#include <iostream>
#include <math.h>
#include <string>

int main(int argc, const char * argv[]) {
    if (argc < 5) {
        std::cout << "Number of numbers error" << std::endl;
        exit(0);
    }
    
    float min = atof(argv[1]);
    float max = atof(argv[1]);
    float var;
    float sum = 0;
    
    //converts char[] to float, and adds each element to sum if they are smaller than the max
    //if the number is larger or smaller than the outliers than updates the min max
    for (int i = 1; i < argc; i++){
        var = atof(argv[i]);
        if (var >= max){
            if (min!=max)
                sum += max;
            max = var;
        }
        else if (var <= min){
            if (min!=max)
                sum += min;
            min = var;
        }
        else{
            sum += var;
        }
    }
    //outputs the average
    std::cout << (float)((int)(sum/(argc-3)*100))/100.00 << '\n';
    
    return 0;
}
