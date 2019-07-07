#!/usr/bin/env python
# coding: utf-8

# In[1]:


import sys


# In[ ]:
print("Halo")
print(sys.argv[1])
angka = []
s = "2,1"
for x in sys.argv[1] :
    x = sys.argv[1].split(",")
    angka.extend(x)
c = int(angka[0])
d = int(angka[1])
a = c+d

print (int(a))

# print (sys.argv[2])
# print (sys.argv[3])



#%%
