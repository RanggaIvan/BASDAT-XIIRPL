from turtle import *
color("black", "red")
title("art")
speed(-5)
bgcolor("black")
r,g,b=200,0,0
def fleur():
    for i in range(300):
        begin_fill()
        circle(190-i,90)
        left(90)
        circle(190-i,90)
        left(18)
        end_fill()

fleur()
mainloop()