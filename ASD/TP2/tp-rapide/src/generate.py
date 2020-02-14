# -*- coding: utf-8 -*-

"""
:mod:`generate` module : list facilities module for quicksort assignment

:author: `FIL - IEEA - Univ. Lille1.fr <http://portail.fil.univ-lille1.fr>`_

:date: 2016, january
"""

import random
import numpy as np
from element import *

def is_sorted(t):
    """
    Predicate to test whether an array is sorted in increasing order.

    :param t: A array of Element
    :type t: NumPy array of Element
    
    :return: True if the array is sorted, else False
    :rtype: bool

    >>> import numpy    
    >>> is_sorted(numpy.array([1,2,3]))
    True
    >>> is_sorted(numpy.array([1,3,2]))
    False
    """
    n = len(t)
    i = 0
    while i < n-1 and t[i] <= t[i+1]:
        i = i + 1
    return i == n - 1

def decreasing_array(n):
    """
    Creates a fresh array with Element in decreasing order.
    
    :param n: The length of the array
    :type t: int
    
    :return: A array of Element from n-1 to 0
    :rtype: NumPy array
    
    >>> print(decreasing_array(3))
    [2 1 0]
    """
    return np.array([Element(i) for i in reversed(range(n))])


def increasing_array(n):
    """
    Creates a fresh array with Element in increasing order.
    
    :param n: The length of the array
    :type t: int
    
    :return: A array of Element from 0 to n-1
    :rtype: NumPy array
    
    >>> print(increasing_array(3))
    [0 1 2]
    """
    return np.array([Element(i) for i in range(n)])


def random_array(n):
    """
    Creates a fresh array with Element in random order. Each Element from
    0 to n-1 is present only once.
    
    :param n: The length of the array
    :type t: int
    
    :return: A array of Element from 0 to n-1
    :rtype: NumPy array
    
    >>> sorted(random_array(3))
    [0, 1, 2]
    
    """
    l = [Element(i) for i in range(n)]
    random.shuffle(l)
    return np.array(l)


if __name__ == "__main__":
    import doctest
    doctest.testmod()
