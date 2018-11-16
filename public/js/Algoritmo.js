Enfermedades = [
  'AMIGDALITIS',
  'ASMA',
  'HEPATITIS',
  'DIABETES',
  'ANOREXIA' ];

sintomasGripa = [
  'conjestion nasal',
  'tos seca o con flema',
  'dolor muscular',
  'fin' ];

gradoGripa = [ 0.7, 0.5, 0.4 ];

sintomasAsma = [
  'tos',
  'sibilancia',
  'presion en el pecho',
  'dificultad para respirar',
  'fin'];

gradoAsma = [ 0.6, 0.5, 0.4, 0.7];

sintomasHepatitis = [
  'nauseas',
  'fiebre',
  'dolor de estomago',
  'diarrea',
  'fin'];

gradoHepatitis = [ 0.5, 0.4, 0.7, 0.6 ];

sintomasDiabetes = [
  'orina mas de lo habitual',
  'sed exesiva',
  'perdida de peso sin razon',
  'fatiga o cansancio duante el dia',
  'fin'];

gradoDiabetes = [ 0.3, 0.4, 0.5, 0.6 ];

sintomasAnorexia = [
  'obsecion por la alimentacion',
  'trastorno por pesarse',
  'trastorno por contar los alimentos',
  'depresion o sentirse sin energia',
  'fin']

gradoAnorexia = [ 0.6, 0.5, 0.4, 0.6 ];

sintomasGeneral = [
  'conjestion nasal',
  'tos seca o con flema ',
  'dolor muscular ',
  'tos',
  'sibilancia',
  'presion en el pecho',
  'dificultad para respirar',
  'nauseas',
  'fiebre',
  'dolor de estomago',
  'diarrea',
  'orina mas de lo habitual',
  'sed exesiva',
  'perdida de peso sin razon',
  'fatiga o cansancio duante el dia',
  'obsecion por la alimentacion',
  'trastorno por pesarse ',
  'trastorno por contar los alimentos',
  'depresion o sentirse sin energia' ];

sintomasSeleccionados = [];

function porcentaje(y,x){
  var result = y + ((1-y)*x);
  return result;
}

function mostrar(x){
  var a = 1;
  for (var sintoma = 0; sintoma <= x; sintoma++) {
    alert (a + "." + sintoma);
    a = a+1;}
}

function tomarSintoma(){
  var respuesta = -1;
  alert ("0. terminar de seleccionar");
  alert("seleccione los sintomas");
  while(respuesta != 0){
    respuesta = input();
    sintomasSeleccionados.append(respuesta);
  return sintomasSeleccionados;}
}

def gripa(sintomasSeleccionados):
  grados=[]
  for x in sintomasSeleccionados:
      if (x==1)or(x==2)or(x==3):
        grados.append(gradoGripa[x-1])
  valor=0
  for y in grados:
    valor=porcentaje(valor,y)
  return valor 

def asma(sintomasSeleccionados):
  grados=[]
  for x in sintomasSeleccionados:
      if (x==4)or(x==5)or(x==6)or(x==7):
        grados.append(gradoAsma[x-4])
  valor=0
  for y in grados:
    valor=porcentaje(valor,y)
  return valor 

def hepatitis(sintomasSeleccionados):
  grados=[]
  for x in sintomasSeleccionados:
      if (x==8)or(x==9)or(x==10)or(x==11):
        grados.append(gradoHepatitis[x-8])
  valor=0
  for y in grados:
    valor=porcentaje(valor,y)
  return valor 

def diabetes(sintomasSeleccionados):
  grados=[]
  for x in sintomasSeleccionados:
      if (x==12)or(x==13)or(x==14)or(x==15):
        grados.append(gradoDiabetes[x-12])
  valor=0
  for y in grados:
    valor=porcentaje(valor,y)
  return valor 

def anorexia(sintomasSeleccionados):
  grados=[]
  for x in sintomasSeleccionados:
      if (x==16)or(x==17)or(x==18)or(x==19):
        grados.append(gradoAnorexia[x-16])
  valor=0
  for y in grados:
    valor=porcentaje(valor,y)
  return valor 

def sistema():
  porcentajes=[]
  mostrar(sintomasGeneral)
  sintomas=tomarSintoma()
  porcentajes.append(gripa(sintomas))
  porcentajes.append(asma(sintomas))
  porcentajes.append(hepatitis(sintomas))
  porcentajes.append(diabetes(sintomas))
  porcentajes.append(anorexia(sintomas))
  print "usted tiene gripa en un :", porcentajes[0]
  print "usted tiene asma en un :", porcentajes[1]
  print "usted tiene hepatitis en un :", porcentajes[2]
  print "usted tiene diabetes en un :", porcentajes[3]
  print "usted tiene anorexia en un :", porcentajes[4]
  
sistema()