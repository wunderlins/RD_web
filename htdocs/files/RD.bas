@title ResearchDrones Intervalometer
@param a = interval (sec)
@default a 0
@param c Time active (m)
@default c 5
@param j Zoom-step
@default j 0 rem step 30 is equivalent to 50 mm SLR focal length
@param z Start delay (s)
@default z 5

REM (c) 2013, Simon Wunderlin, ResearchDrones LLC

rem Starts indicator sound
playsound 4

rem e is time for script to remain active in milliseconds
e=c*60000

rem First shot
set_zoom j
shoot

rem Delay
for n=0 to z
    print "Starting in ";z-n;"s"
    sleep 1000
next n

rem g is time elapsed and f is start time and p is shots
g=0
f=get_tick_count 
p=0

do
    set_zoom j
    s = get_tick_count
		shoot
    sleep a*1000 - (get_tick_count - s) 
    g=s-f
    t=(e-g)/1000
    p=p+1
    if g>e then shut_down
until ( 0 )

