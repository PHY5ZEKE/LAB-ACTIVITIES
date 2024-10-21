<x-layout>
  <form action="/register" method="POST">
    @csrf
      <div class="border-b border-gray-900/10 pb-12">
          <h2 class="text-base font-semibold leading-7 text-gray-900">Student Registration</h2>
          <p class="mt-1 text-sm leading-6 text-gray-600">Thank you for applying to our college. Please fill in the form below to complete the registration process for admission.</p>
    
          <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
              <div class="sm:col-span-3">
                  <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">First name</label>
                  <div class="mt-2">
                      <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                  </div>
              </div>
    
              <div class="sm:col-span-3">
                  <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">Last name</label>
                  <div class="mt-2">
                      <input type="text" name="last_name" id="last_name" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                  </div>
              </div>
    
              <div class="sm:col-span-full">
                  <label for="studentNumber" class="block text-sm font-medium leading-6 text-gray-900">Student Number</label>
                  <div class="mt-2">
                      <input id="studentNumber" name="studentNumber" type="text" autocomplete="studentNumber" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                  </div>
              </div>
    
              <div class="sm:col-span-full">
                  <label for="course" class="block text-sm font-medium leading-6 text-gray-900">Course</label>
                  <div class="mt-2">
                      <select id="course" name="course" autocomplete="course-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                          <option disabled selected>Select A Course</option> 
                          <option>BS in Information Technology</option>
                          <option>BS in Computer Science</option>
                          <option>BS in Information Systems</option>
                      </select>
                  </div>
              </div>

              <div class="sm:col-span-full">
                  <label class="block text-sm font-medium leading-6 text-gray-900">Gender</label>
                  <div class="mt-2 flex items-center space-x-4">
                      <label class="inline-flex items-center">
                          <input type="radio" name="gender" value="female" class="form-radio text-indigo-600" required>
                          <span class="ml-2">Female</span>
                      </label>
                      <label class="inline-flex items-center">
                          <input type="radio" name="gender" value="male" class="form-radio text-indigo-600" required>
                          <span class="ml-2">Male</span>
                      </label>
                      <label class="inline-flex items-center">
                          <input type="radio" name="gender" value="others" class="form-radio text-indigo-600" required>
                          <span class="ml-2">Others</span>
                      </label>
                  </div>
              </div>

              <div class="sm:col-span-full">
                <label for="birthday" class="block text-sm font-medium leading-6 text-gray-900">Birthday</label>
                <div class="mt-2">
                    <input id="birthday" name="birthday" type="date" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                </div>
            </div>




              <div class="sm:col-span-full">
                  <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                  <div class="mt-2">
                      <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                  </div>
              </div>

              <div class="sm:col-span-full">
                  <label for="contact" class="block text-sm font-medium leading-6 text-gray-900">Contact Number</label>
                  <div class="mt-2">
                      <input id="contact" name="contact" type="text" autocomplete="contact" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                  </div>
              </div>
    
              <div class="col-span-full">
                  <label for="additional-info" class="block text-sm font-medium leading-6 text-gray-900">Additional Information</label>
                  <div class="mt-2">
                      <textarea id="additional_info" name="additional_info" rows="4" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-span-full">
        <div class="mt-2">
            <button type="submit" class="inline-flex justify-center rounded-md bg-gray-900 py-2 px-4 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Submit
            </button>
        </div>
    </div>

  </form>
</x-layout>