#conTemplate = [BK, Abu, PK, LK, SK, BetaN, ME, Ca, P, Ptersedia, Lys, Met]
#kandungan nutrien tiap bahan pakan
conJLO=[87,1.76,8,3.8,2.2,84.24,3300,0.02,0.28,0.09,0.2278,0.169]
conJIM=[88,1.76,8,3.8,2.2,84.24,3350,0.02,0.28,0.09,0.2278,0.169]
conDDK=[89.7,7.88,11.32,13,8,59.8,2900,0.07,1.5,0.5,0.4246,0.264]
conBEK=[88.3,1.17,8.9,1,0.81,88.12,3100,0.09,0.08,0.03,0.3375,3.08]
conPOL=[87.4,4,12.68,4,15,65.32,2800,0.14,1.15,0.2,0.5231,0.2]
conGAP=[87,2.5,2.5,0.70,4.6,89.7,2900,0.15,0.1,0.03,0.1,0.04]
conSOR=[87,3,8.8,2.9,2.3,83,3288,0.04,0.3,0.05,0.21,0.16]
conBKD=[87,7,42,1.9,7,42.1,2290,0.27,0.56,0.19,2.607,0.609]
conBIK=[88.8,5.8,39.6,21.3,6.3,27,3500,3.300,6.1,0.5,6.2,1.4]
conCGF=[88.3,6.9,21.7,3.4,8.3,59.7,2079,1.6,10.2,7.65,2.9,1.7]
conCGM=[90,2.68,64,2.91,0.8,29.55,3720,0.05,0.5,0.17,0.9813,1.381]
conBKT=[92.1,7.37,43,1.21,17.40,31.02,2650,0.16,0.56,0.06,1.4591,0.454]
conBKP=[93,3,40.9,2.9,2.3,50.9,3288,0.2,1.05,0.1,1.59,0.55]
conBKL=[87,6.65,18,6,17.33,52.02,2800,0.07,0.47,0.15,0.6253,0.237]
conBKS=[91.2,4.7,16.7,9.2,19.8,49.6,2650,2.8,6,0.5,2.9,1.8]
conMBM=[92.1,6.88,43,10.93,2.46,36.73,2375,9.78,4.5,3.15,2.0787,0.541]
conTIK=[91.9,26,55,7.52,0.7,10.78,2830,7.19,2.88,2.016,3.9475,1.461]
conTCC=[90.8,9.4,61,8.6,3.2,17.8,3900,5.4,10.2,2,7.4,4]
conTDR=[99,4,81.1,1.6,0.5,13.3,2830,0.55,0.42,0.05,7.05,0.53]
conMAY=[91.9,11.2,22.9,2.4,41.6,21.9,1400,0,0,0,4.3,1]
conMIK=[99,0.5,0,99,0,0,8700,0,0,0,0,0]
conCPO=[99,0.5,0,99,0,0,7500,0,0,0,0,0]
conMOL=[70.9,4,4,0.1,1,90.9,2280,0.8,0,0,0,0]
conGRM=[99.6,0,0,0,0,0,0,0,0,0,0,0]
conTKE=[90.8,21.70,50.5,4.2,8.8,14.8,1980,8.3,5.6,2.8,4.6,1.6]
conKPR=[99,0,0,0,0,0,0,38,0,0,0,0]
conCCO=[99,0,0,0,0,0,0,40,0,0,0,0]
conDCP=[93.5,0,0,0,0,0,0,22.72,17.68,13.26,0,0]
conMCP=[93.5,0,0,0,0,0,0,16,12,9,0,0]
conLYS=[98,0,95.8,0,0,3.7,3990,0,0,0,78.5,0]
conDLM=[99,0.2,58,0,0,41.8,5020,0,0,0,0,99]
conPRM=[99,0,0,0,0,0,0,0,0,0,0,0]
conPRB=[99,0,0,0,0,0,0,0,0,0,0,0]
conPRL=[99,0,0,0,0,0,0,0,0,0,0,0]


#deklarasi variabel------------------------------------------------------------------------------------------------------------
aTotal=[conJLO,conJIM,conDDK,conBEK,conPOL,conGAP,conSOR,conBKD,conBIK,conCGF,conCGM,conBKT,conBKP,conBKL,conBKS,conMBM,conTIK,conTCC,conTDR,conMAY,conMIK,conCPO,conMOL,conGRM,conTKE,conKPR,conCCO,conDCP,conMCP,conLYS,conDLM,conPRM,conPRB,conPRL]
A=[]
C=[]
b=[]
d=[]
r=[]
consPakai=[]
allx=[]

#panggil data ------------------------------------------------------------------------------------------------------------------
#dapatkan id bahan ke data
lines=[line.strip() for line in open('idBahan.dat')]
data=[int(i) for i in lines]
valueBP = len(data)
#dapatkan harga
lines=[line.strip() for line in open('harga.dat')]
c=[int(i) for i in lines]

#Looping A positif ------------------------------------------------------------------------------------------------------------
#urutannya: dari tiap nutrien yang positif dulu, trus baru yang negatif
for i in range (0,valueBP):
	data[i]-=1
	nilai=data[i]
	consAmbil=aTotal[nilai]
	consPakai.append(consAmbil)
	
for j in range (0,12):
	A.append([])
	for k in range (0,valueBP):
		nutBP=consPakai[k]
		nut=nutBP[j]
		A[j].append(nut)

#Looping A negatif ------------------------------------------------------------------------------------------------------------
for j in range (0,12):
	r.append([])
	for k in range (0,valueBP):
		nutBP=consPakai[k]
		nut=nutBP[j]
		nutMin=nut*(-1)
		r[j].append(nutMin)

for j in range (0,12):
	R=r[j]
	A.append(R)
	
for i in range (0,valueBP):
	allx.append(1)
C.append(allx)

#Looping b ------------------------------------------------------------------------------------------------------------
#dapatkan maxNutrien
lines=[line.strip() for line in open('maxUnggas.dat')]
maxU=[float(i) for i in lines]

valueMaxU = len(maxU)

for i in range (0,valueMaxU):
	nutUMax=maxU[i]
	b.append(nutUMax)

#dapatkan minNutrien
lines=[line.strip() for line in open('minUnggas.dat')]
minU=[float(i) for i in lines]

valueMinU = len(minU)

for i in range (0,valueMinU):
	nutU=minU[i]
	nutUMin=nutU*(-1)
	b.append(nutUMin)
	
#b.append(1)

d.append(1)
#boundaries -----------------------------------------------------------------------------------------------------------
#dapatkan min boundaries
lines=[line.strip() for line in open('min.dat')]
minBound=[float(i) for i in lines]
#dapatkan max boundaries
lines=[line.strip() for line in open('max.dat')]
maxBound=[float(i) for i in lines]

#ubah array menjadi tuple
tupleMinBound=tuple(minBound)
tupleMaxBound=tuple(maxBound)

#looping bound tiap bahan pakan
a = ('')
abounds=list(a)
for i in range (0,valueBP):
	xMin=tupleMinBound[i]/100
	xMax=tupleMaxBound[i]/100
	xBounds=(xMin,xMax)
	#masukin bound tiap bahan ke list
	abounds.insert(len(abounds),xBounds)
boundaries=tuple(abounds)
#calculate -------------------------------------------------------------------------------------------------------------
from scipy.optimize import linprog
hasil = linprog(c, A_ub=A, b_ub=b, A_eq=C, b_eq=d, bounds=boundaries, method='simplex', options=dict(bland=True,disp=True))
print(hasil)