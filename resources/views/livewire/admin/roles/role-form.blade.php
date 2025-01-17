<div class="flex-1 flex justify-center overflow-y-hidden">
  <div class="card w-full max-w-xl">
    <div class="card-header">
      <p>{{ $buttonText }} Role</p>
    </div>
    <div class="card-body">
      <form wire:submit.prevent="submit" class="flex-none article-right flex flex-col justify-between">
        <div class="overflow-y-auto">
          <section>
            <div class="input-group">
              <label for="name">Name</label>
              <input wire:model="name" type="text" id="name" maxlength="80">
              @error('name') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
          </section>
          <section>
            <div class="input-group">
              <label for="guard">Guard</label>
              <select wire:model="guard_name" wire:change="guardChange" type="text">
                <option value="null" disabled>Select one guard</option>
                @foreach ($guards as $guard)
                <option value="{{ $guard->name }}">{{ $guard->name  }}</option>
                @endforeach
              </select>
              @error('guard_name') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
          </section>
          @if ($defaultPermissions)
          <section>
            <div class="input-group">
              <label for="permission">Permission</label>
              @foreach ($defaultPermissions as $key => $permission)
              <div class="flex justify-between mb-2">
                <div class="" for="permission">{{ $permission->name }}</div>
                <input class="w-16 h-8" type="checkbox" wire:model="permissionsId.{{ $key }}"
                  value="{{ $permission->id }}" />
              </div>
              @endforeach
            </div>
          </section>
          @endif

        </div>
        <div>
          @if ($errors->any())
          <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded m-2">
            <strong class="font-bold">Error!</strong>
            <span class="block sm:inline">{{ $errors->first() }}</span>
          </div>
          @endif
          <button type="submit" class="">{{ $buttonText }}</button>
        </div>
      </form>
    </div>
  </div>
</div>