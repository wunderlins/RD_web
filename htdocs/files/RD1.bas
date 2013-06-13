@title ResearchDrones Intervalometer
@param a = interval (sec)
@default a 0
@param c Time active (m)
@default c 5
@default j 0 rem step 30 is equivalent to 50 mm SLR focal length
@param z Start delay (s)
@default z 5

rem Starts indicator sound
playsound 4

rem e is time for script to remain active in milliseconds
e=c*60000

rem First shot
rem 3 = TV, 4 = AV
set_capture_mode 3
sleep 500
rem set_focus 65530
rem sleep 500
rem set_aflock 1
sleep 500
shoot

rem Delay
for n=0 to z
   print "Starting in ";z-n;"s"
   sleep 1000
next n


playsound 6

rem g is time elapsed and f is start time and p is shots
g=0
f=get_tick_count
p=0

do
   s = get_tick_count
   shoot
   sleep a*1000 - (get_tick_count - s)
   g=s-f
   t=(e-g)/1000
   p=p+1
   if g>e then shut_down
until ( 0 )