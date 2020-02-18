ls(pat="^m")#affiche la liste des noms des objets en memoire commançant par m
help("ls")#affiche l'aide sur la commande ls
help.start()#affiche l'aide generale
example(plot)#ouvre plot et attend des valeur et dessine des graphes
x=seq(1,20)#affeccte a x une suit de chiffre commançant par 1 et  se terminant par 20
plot(x = seq(1,20))#affiche le graphe des valeur de x
help(seq)
example(seq)#affiche un example d'utilisation de seq
y=seq(2,20,by=0.05)#affiche les valeur de 2 à 20 avec un pas de 0.5
help(rep)
example(rep)
z=rep(2,times=20)#reperte 12 fois 2 avec times en parametre qui permet de le fait
i=c("A","B","C")#concatener A B C et les affecter a c
rep(i,each=20)
help(c)#voir l'aide la concatenation
help(gl)
example(gl)
data()
data("morley")
morley#affiche la base de donnée de morley
help(matrix)
example(matrix)
M=matrix(data=AirPassengers, nrow=12,ncol=12, byrow= TRUE)#byrow qui permet de bien remplie la matrix colone et ligne respecter
AirPassengers
n=M[10:11,2:6]#extraire les valeur en commencant par les ncol
m=data.frame(row.names=c("Jean","Fatima","kevin","Eduardo"),taille=c(168,175,172,183),poids=c(67,75,69,81))


help(morley)
example(morley)
help(mean)
exp=morley[,3]#affecte a exp la vitesse des 5 expercice
vitesse1=exp[0:20]#affecte les vitesse de la premiere experience
vitesse2=exp[21:40]#affecte les vitesse de la deuxie  me experience
vitesse3=exp[41:60]#affecte les vitesse de la troisieme experience
vitesse4=exp[61:80]#affecte les vitesse de la quatrieme experience
vitesse5=exp[81:100]#affecte les vitesse de la cinquieme experience
vitesseTotal=exp[0:100]#affecte les vitesse de tout les experiences
mean(vitesse1)#donne la moyenne de vitesse1
mean(vitesse2)
mean(vitesse3)
mean(vitesse4)
mean(vitesse5)
mean(vitesseTotal)
median(vitesse1)#donne la median de vitesse1
median(vitesse2)#donne la median de vitesse2
median(vitesse3)
median(vitesse4)
median(vitesse5)
median(vitesseTotal)
sd(vitesse1)#donne l'ecart type de vitesse1
sd(vitesse2)
sd(vitesse3)
sd(vitesse4)
sd(vitesse5)
sd(vitesseTotal)
summary(vitesse1)#idem que les trois commande median mean sd avec plus de detail
summary(vitesse2)
summary(vitesse3)
summary(vitesse4)
summary(vitesse5)
summary(vitesseTotal)
hist(vitesse1)#trace l'histogramme de vitesse1
hist(vitesse2)
hist(vitesse3)
hist(vitesse4)
hist(vitesse5)
hist(vitesseTotal)

M=matrix(data=AirPassengers, nrow=12,ncol=12, byrow= TRUE)#byrow qui permet de bien remplie la matrix colone et ligne respecter
M1=M[8:12,1:12]#recuperrer les valeurs des années 1956-1960
hist(M1)#on obseve 8 classes
hist(M1,breaks = 5)#grace à break il fera 5 classes,on constate que les valeur comprise entre 300 et 400 viennent tres frequement

t=seq(0,2*pi,0.05)#je crée un interval donc [0,2pi]
x=sin(t)#creation du vecteur x
plot(t,x)#tracer de la courbe representant sin(t)
hist(x)#on constate que les valeur -1 et 1 apparessent plus frequenment tant disque les aute sont constante
hist(x,nclass = 4)#avec 4 classes c est plus precis et justifie mon explication precedent

  help("curve")#voir l'aide concernant curve
curve(exp(-x^2/2)/sqrt(2*pi),-2,2)

mu=0
o=1;
curve(exp(-(x-mu)^2/2*o^2)/o*sqrt(2*pi),-4,4,add=TRUE,col="red")#je fais un curve de -4 a 4

mu=1
o=0.2;
curve(exp(-(x-mu)^2/2*o^2)/o*sqrt(2*pi),-4,4,add=TRUE,col="black")#je fais un curve de -4 a 4

mu=2
o=0.6;
curve(exp(-(x-mu)^2/2*o^2)/o*sqrt(2*pi),-4,4,add=TRUE,col="blue")#je fais un curve de -4 a 4
help(dens)
