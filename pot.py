import sys
import pickle

list1 = sys.argv[1:]
def main():
  a=int(list1[0])
  b=int(list1[1])
  c=float(list1[2])
  d=int(list1[3])
  e=int(list1[4])
  f=int(list1[5])
  list2=[a,b,c,d,e,f]
  model = pickle.load(open('iwp','rb'))
  x=model.predict([[a,b,c,d,e,f]])
  print(x[0])

if __name__ == '__main__':
    main()
