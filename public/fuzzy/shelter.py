#!/usr/bin/env python
# coding: utf-8

# In[2]:


import sys

import numpy as np
import skfuzzy as fuzz
import matplotlib.pyplot as plt


# In[3]:


x_korban = np.arange(0, 55,1)
x_infrastruktur = np.arange(0, 55,1)
x_tim = np.arange(0, 25, 1)


# In[4]:


korban_minor = fuzz.trapmf(x_korban, [0,0,5,20])
korban_masif = fuzz.trapmf(x_korban, [10,40,60,60])

infrastruktur_minor = fuzz.trapmf(x_infrastruktur, [0,0,5,20])
infrastruktur_masif = fuzz.trapmf(x_infrastruktur, [15,45,60,60])

tim_sedikit = fuzz.trapmf(x_tim, [0,0,5,15])
tim_banyak =  fuzz.trapmf(x_tim, [10,20,30,30])


# In[5]:


angka = []
for x in sys.argv[1] :
    x = sys.argv[1].split(",")
    angka.extend(x)

korban = angka[0]
infrastruktur = angka[1]


# In[6]:


in1 = []
in1.append(fuzz.interp_membership(x_korban, korban_minor, korban))
in1.append(fuzz.interp_membership(x_korban, korban_masif, korban))

in2= []
in2.append(fuzz.interp_membership(x_infrastruktur, infrastruktur_minor, infrastruktur))
in2.append(fuzz.interp_membership(x_infrastruktur, infrastruktur_masif, infrastruktur))
print(in1)
print(in2)


# In[7]:


apred1 = np.fmin(in1[0], in2[0])
z1 = 10 * apred1 + 10
apred2 = np.fmin(in1[1], in2[1])
z2 = 10 * apred2 + 10
apred3 = np.fmin(in1[1], in2[0])
z3 = 10 * apred3 + 10
apred4 = np.fmin(in1[0], in2[1])
z4 = 10 * apred4 + 10
print(apred1, apred2, apred3, apred4)
print(z1, z2,z3,z4)

z = (apred1*z1 + apred2*z2 + apred3*z3 + apred4*z4 ) / (apred1 + apred2 + apred3 + apred4)
predikat = ""
hasil = int(z)
print(str(hasil))

