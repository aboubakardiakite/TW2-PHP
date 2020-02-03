# -*- coding: utf-8 -*-

"""
:mod:`test` module : test module for experiences assignment

:author: `FIL - IEEA - Univ. Lille1.fr <http://portail.fil.univ-lille1.fr>`_

:date: 2018, january
"""

import sys
import experience
import marker
import sorting as s
import numpy as np

def compare(m1,m2):
    global cpt
    cpt+=1
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
    i=0
    while(i<len(markers)):
        j=0
        while(j<len(positive)):
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

#recherche  dichotomique
def recherche_dichotomique( element, liste_triee):
    a = 0
    b = len(liste_triee)-1
    m = (a+b)//2
    while a < b:
        if str(liste_triee[m])==str(element):
            return m
        elif str(liste_triee[m]) > str(element) :
            b = m-1
        else:
            a = m+1
        m = (a+b)//2
    return a

def negative_markers2(markers,positive):
    negative = np.array([])
    m=len(markers)
    p=len(positive)
    positive=s.merge_sort(positive,compare)
    t=1;
    for i in range(0,m):
        j=0;
        
        indice = recherche_dichotomique( markers[i], positive)
        if(compare(markers[i],positive[indice])==0):
            t=1
            
        else:
            t=0
        
        if(t==0):
            negative=np.append(negative,markers[i])       
        
    return negative


# STRATEGY 3
def negative_markers3(markers,positive):
    negative = np.array([])

    markers=s.merge_sort(markers,compare)
    positive=s.merge_sort(positive,compare)
    i=0
    j=0
    while(j<len(positive)):
        comp=compare(markers[i],positive[j])
        if(comp==0):
            i=i+1;
            j=j+1;
        elif(comp<0):
            negative=np.append(negative,markers[i])
            i=i+1
    for k in range(10,len(markers)):
        negative=np.append(negative,markers[k])
    
    return negative
    
   
        
if __name__ == "__main__":
    p = int(sys.argv[1])
    m = int(sys.argv[2])

    assert (m > 0), "The number of markers must be greater than 0"
    assert (p <= m), "The number of positive markers must be less or equal to the number of markers"
    
    exp = experience.Experience(p,m)
    markers = exp.get_markers()
    positive = exp.get_positive_markers()
    
    
"""
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
"""
