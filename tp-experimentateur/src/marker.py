# -*- coding: utf-8 -*-

"""
:mod:`marker` module : Module to manage markers 

:author: `Dpt Informatique - FST - Univ. Lille <http://portail.fil.univ-lille1.fr>`

:date: 2018, january

A marker is a represented as a String. 

"""

import random
import copy

class Marker:

    def __init__ (self,number):
        """
        Creates a new Marker.

        :param number: The number of the marker
        :type number: int (must be greater or equal than zero)
        """
        assert(type(number) is int)
        assert(number >= 0)
        self.number = number

    def cmp (self,other):
        """
        Compares this marker and *other*.

        :param other: The first marker
        :type other: Marker
        :return: -1, 0 or 1 resp. if *self < other*, *self* = *other* or *self* > *other*
        :rtype: int

        >>> Marker(45).cmp(Marker(234))
        -1
        >>> Marker(45).cmp(Marker(45))
        0
        >>> Marker(45).cmp(Marker(24))
        1
        """
        if self.number == other.number:
            return 0
        elif self.number < other.number:
            return -1
        else:
            return 1

    def __repr__ (self):
        return "m{}".format(self.number)

    @staticmethod
    def markers (p):
        """
        Returns a list of *p* markers. Markers are in random ordering.

        :param p: The number of markers (must be strictly greater than 0).
        :type p: int
        :return: The list of markers
        :rtype: List of String

        >>> import marker
        >>> sorted(["{}".format(i) for i in marker.Marker.markers(10)])
        ['m0', 'm1', 'm2', 'm3', 'm4', 'm5', 'm6', 'm7', 'm8', 'm9']
        """
        assert(p > 0)
        l = [ Marker(i) for i in range(p) ]
        random.shuffle(l)
        return l
    
if __name__ == "__main__":
    import doctest
    doctest.testmod()
    
