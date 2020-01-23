# -*- coding: utf-8 -*-

"""
:mod:`test` module : test module for experiences assignment

:author: `FIL - IEEA - Univ. Lille1.fr <http://portail.fil.univ-lille1.fr>`_

:date: 2018, january
"""

import sys
import experience
import marker
import numpy as np

def compare (m1,m2):
    cpt=cpt+1
    return m1.cmp(m2)

# STRATEGY 1
def negative_markers1(markers,positive):
    """
    Computes the list of negative markers from the list of markers and
    the list of positive markers.

    :param markers: The list of markers 
    :type markers: Numpy array of String
    :param positive: The list of positive markers
    :type positive: Numpy array of String
    :return: The list of negative markers
    :rtype: Numpy array of String
    """
    negative = np.array([])
    m=len(markers)
    p=len(positive)
    i=0
    
    while(i<m):
        j=0
        
        while(j<p):
            
            if(compare(markers[i],positive[j])!=0):
                
                t=True
                
            else:
                t=False
                break
            j=j+1
            
        if(t==True):
            
            negative=np.append(negative,markers[i])       
        i=i+1
    return negative


def negative_markers2(markers,positive):
    negative = np.array([])
    n=len(positive)
    m=len(markers)
    p=len(positive)

    temp=0
    for i in range(2,n+1):
        for j in range(0,n-i+1):
            if str(positive[j])>str(positive[j+1]):
                temp=positive[j]
                positive[j]=positive[j+1]
                positive[j+1]=temp
    
    pos=positive
    i=0
    while(i<m):
        j=0
        
        while(j<p):
            if(compare(markers[i],pos[j])!=0):
                t=True
                
            else:
                t=False
                break
            j=j+1
        if(t==True):
        
            negative=np.append(negative,markers[i])       
        i=i+1          
    return negative

# STRATEGY 3
def negative_markers3(markers,positive):
    negative = np.array([])
    return negative
        
if __name__ == "__main__":
    p = 5
    m = 10

    assert (m > 0), "The number of markers must be greater than 0"
    assert (p <= m), "The number of positive markers must be less or equal to the number of markers"
    
    exp = experience.Experience(p,m)
    markers = exp.get_markers()
    positive = exp.get_positive_markers()

    print("Markers: %s" % (markers))
    print("Positive markers: %s" % (positive))
    
    # test stategy 1
    cpt = 0
    print("Negative markers: %s" % (negative_markers1(markers,positive)))
    print("Nb. comparisons: %d" % (cpt))
    # test stategy 2
    cpt = 0
    print("Negative markers: %s" % (negative_markers2(markers,positive)))
    print("Nb. comparisons: %d" % (cpt))

    # test stategy 3
    cpt = 0
    print("Negative markers: %s" % (negative_markers3(markers,positive)))
    print("Nb. comparisons: %d" % (cpt))

