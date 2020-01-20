# -*- coding: utf-8 -*-

"""
:mod:`experience` module : Module to manage experiences

:author: `Dpt Informatique - FST - Univ. Lille <http://portail.fil.univ-lille1.fr>`

:date: 2018, january

An experience is maed of a set of markers and a subset of those
markers that have been tested positive. 

"""

import random
import copy
import numpy as np
import marker

class Experience:

    def __init__(self,p,m):
        """
        Creates the results of an experience on *p* positive markers
        among *m* markers.

        :param p: The number of positive markers (must be less or equal 
            than the numbers of markers in *m*)
        :type p: int
        :param m: The number of markers (must be greater than 0)
        :type m: int
        """
        assert (p <= m)
        self.markers = np.array(marker.Marker.markers(m))
        l = copy.deepcopy(list(self.markers))    
        random.shuffle(l)
        self.experience = np.array(l[0:p])

    def get_markers (self):
        """
        :return: The markers that have been tested during the experience.
        :rtype: Array of Marker

        >>> e = Experience(6,10)
        >>> m = e.get_markers()
        >>> len(m)
        10
        >>> sorted([ repr(i) for i in m])
        ['m0', 'm1', 'm2', 'm3', 'm4', 'm5', 'm6', 'm7', 'm8', 'm9']
        """
        return self.markers
    
    def get_positive_markers (self):
        """
        :return: The positive markers.
        :rtype: Array of Marker

        >>> e = Experience(10,100)
        >>> p = e.get_positive_markers()
        >>> len(p)
        10
        """
        return self.experience
        
if __name__ == "__main__":
    import doctest
    doctest.testmod()
    
