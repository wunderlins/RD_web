--[[
rem 2013-01-13 by Simon Wunderlin, ResearchDrones LLC
@title ResearchDrones Fast Interval
@param a = interval (sec/10)
@default a 0
--]]

function camera_close()
	click "display"
	sleep(1000)
	click "display"
	sleep(1000)
	shut_down()
	sleep(5000)
end

--[[
f = get_usb_power(1)
if f == 1 then camera_close() end 
]]--
--shoot()

repeat
	start = get_tick_count()
	
	press("shoot_half")
	repeat
		sleep(50)
		until get_shooting() == true
	click("shoot_full")
	release("shoot_half")
	
	sleep(a*100 - (get_tick_count() - start))
until ( false )


