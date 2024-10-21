<x-layout>
    <form action="/reserve" method="POST">
      @csrf
        <div class="border-b border-gray-900/10 pb-12">
            <h1 class="text-2xl font-bold leading-9 text-gray-900">Hotel Reservation Form</h1>
            <p class="mt-1 text-sm leading-6 text-gray-600">Fill out the form below to reserve a hotel room.</p>
      
            <h2 class="text-xl font-semibold leading-7 text-gray-900 mt-10">Guest Information</h2>
            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                    <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">First name</label>
                    <div class="mt-2">
                        <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 pl-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" >
                    </div>
                    <x-form-error name="first_name" />
                </div>
      
                <div class="sm:col-span-3">
                    <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">Last name</label>
                    <div class="mt-2">
                        <input type="text" name="last_name" id="last_name" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 pl-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" >
                    </div>
                    <x-form-error name="last_name" />
                </div>
  
                
                <div class="sm:col-span-full">
                  <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                  <div class="mt-2">
                      <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 pl-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" >
                  </div>
                  <x-form-error name="email" />
              </div>
  
              <div class="sm:col-span-full">
                  <label for="contact" class="block text-sm font-medium leading-6 text-gray-900">Contact Number</label>
                  <div class="mt-2">
                      <input id="contact" name="contact" type="text" autocomplete="contact" class="block w-full rounded-md border-0 py-1.5 pl-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" >
                  </div>
                  <x-form-error name="contact" />
              </div>
  
              <div class="sm:col-span-full">
                  <label for="address" class="block text-sm font-medium leading-6 text-gray-900">Address</label>
                  <div class="mt-2">
                      <input id="address" name="address" type="text" autocomplete="address" class="block w-full rounded-md border-0 py-1.5 pl-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" >
                  </div>
                  <x-form-error name="address" />
              </div>
            </div>

            <h2 class="text-xl font-semibold leading-7 text-gray-900 mt-10">Room Reservation</h2>
            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
              <div class="sm:col-span-full">
                  <label for="check_in_date" class="block text-sm font-medium leading-6 text-gray-900">Check-in Date</label>
                  <div class="mt-2">
                      <input id="check_in_date" name="check_in_date" type="date" class="block w-full rounded-md border-0 py-1.5 pl-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" >
                  </div>
                  <x-form-error name="check_in_date" />
              </div>
  
  
                <div class="sm:col-span-full">
                    <label class="block text-sm font-medium leading-6 text-gray-900">Room Preferences</label>
                    <div class="mt-2 flex items-center space-x-4">
                        <label class="inline-flex items-center">
                            <input type="radio" name="room" value="standard" class="form-radio text-indigo-600" >
                            <span class="ml-2">Standard (Php 1,500)</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" name="room" value="deluxe" class="form-radio text-indigo-600" >
                            <span class="ml-2">Deluxe (Php 3,000)</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" name="room" value="suite" class="form-radio text-indigo-600" >
                            <span class="ml-2">Suite (Php 4,500)</span>
                        </label>
                    </div>
                    <x-form-error name="room" />
                </div>
  
                <div class="sm:col-span-3">
                    <label for="days" class="block text-sm font-medium leading-6 text-gray-900">No. of Days</label>
                    <div class="mt-2">
                        <input type="number" name="days" id="days" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 pl-2 pr-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" >
                    </div>
                    <x-form-error name="days" />
                </div>
          
                <div class="sm:col-span-3">
                    <label for="guests" class="block text-sm font-medium leading-6 text-gray-900">No. of Guests</label>
                    <div class="mt-2">
                        <input type="number" name="guests" id="guests" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 pl-2 pr-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" >
                    </div>
                    <x-form-error name="guests" />
                </div>
  
                <div class="sm:col-span-full">
                    <label for="special_request" class="block text-sm font-medium leading-6 text-gray-900">Special Request</label>
                    <div class="mt-2">
                        <textarea id="special_request" name="special_request" rows="4" class="block w-full rounded-md border-0 py-1.5 pl-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                    </div>
                    <x-form-error name="special_request" />
                </div>
            </div>
        </div>
      </br>
        <div class="col-span-full">
          <div class="mt-2">
              <button type="submit" class="inline-flex justify-center rounded-md bg-gray-900 py-2 px-4 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                  Submit
              </button>
          </div>
      </div>
  
  
    </form>
  
  </x-layout>