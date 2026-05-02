    <!-- FLOATING WHATSAPP -->
    <a href="https://wa.me/923460820722" target="_blank" class="wa-float" title="WhatsApp — Message Me Now">
        <i class="fab fa-whatsapp text-white text-2xl"></i>
    </a>


<!-- NAVBAR -->
    <nav class="fixed top-0 w-full z-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="flex items-center justify-end py-3">
                <div class="hidden lg:flex items-center gap-5">
                    <a href="{{url('/')}}" class="text-white hover:text-brand transition-colors text-sm font-medium">Home</a>
                    <a href="{{route('about')}}" class="text-gray-400 hover:text-white transition-colors text-sm font-medium">About</a>
                    <a href="{{ route('projects') }}" class="text-gray-400 hover:text-white transition-colors text-sm font-medium">Projects</a>
                    <a href="{{route('blog')}}" class="text-gray-400 hover:text-white transition-colors text-sm font-medium">Blog</a>

                    <!-- CustomerNearMe SaaS -->
                    <a href="#story"
                       style="display:inline-flex;flex-direction:column;align-items:center;background:#B1E78E;color:#000;border-radius:9px;padding:7px 16px;text-decoration:none;transition:opacity .2s;line-height:1.2;"
                       onmouseover="this.style.opacity='.82'" onmouseout="this.style.opacity='1'">
                        <span style="display:flex;align-items:center;gap:5px;font-size:.82rem;font-weight:800;"><i class="fas fa-map-marker-alt"></i> CustomerNearMe</span>
                        <span style="font-size:.6rem;font-weight:500;opacity:.65;margin-top:2px;">SaaS · Find Leads on Maps</span>
                    </a>

                    <!-- 8 Clients Blueprint -->
                    <a href="#blueprint"
                       style="display:inline-flex;flex-direction:column;align-items:center;background:#111;color:#B1E78E;border-radius:9px;padding:7px 16px;text-decoration:none;border:1px solid rgba(177,231,142,.35);transition:opacity .2s;line-height:1.2;"
                       onmouseover="this.style.opacity='.82'" onmouseout="this.style.opacity='1'">
                        <span style="display:flex;align-items:center;gap:5px;font-size:.82rem;font-weight:800;"><i class="fas fa-bolt"></i> 8 Clients Blueprint</span>
                        <span style="font-size:.6rem;font-weight:500;opacity:.6;margin-top:2px;">$7.99 · Client Hunting Guide</span>
                    </a>

                    <!-- Book a Call -->
                    <a href="https://calendly.com/younasdev/strategy-call" target="_blank"
                       style="display:inline-flex;flex-direction:column;align-items:center;background:#fff;color:#000;border-radius:9px;padding:7px 16px;text-decoration:none;transition:opacity .2s;line-height:1.2;"
                       onmouseover="this.style.opacity='.85'" onmouseout="this.style.opacity='1'">
                        <span style="display:flex;align-items:center;gap:5px;font-size:.82rem;font-weight:800;"><i class="fas fa-calendar-check"></i> Book a Call</span>
                        <span style="font-size:.6rem;font-weight:500;opacity:.55;margin-top:2px;">Free Strategy Session</span>
                    </a>
                </div>

                <button id="mobile-menu-btn" class="lg:hidden p-2 text-white">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>

            <div id="mobile-menu" class="lg:hidden hidden pb-4 border-t border-gray-800">
                <div class="flex flex-col gap-2 pt-4">
                    <a href="{{url('/')}}" class="text-white px-2 py-2 text-sm">Home</a>
                    <a href="{{route('about')}}" class="text-gray-400 px-2 py-2 text-sm">About</a>
                    <a href="{{ route('projects') }}" class="text-gray-400 px-2 py-2 text-sm">Projects</a>
                    <a href="{{route('blog')}}" class="text-gray-400 px-2 py-2 text-sm">Blog</a>

                    <a href="#story" class="mt-2"
                       style="background:#B1E78E;color:#000;border-radius:9px;padding:10px 18px;display:flex;flex-direction:column;text-decoration:none;line-height:1.3;">
                        <span style="display:flex;align-items:center;gap:6px;font-size:.875rem;font-weight:800;"><i class="fas fa-map-marker-alt"></i> CustomerNearMe</span>
                        <span style="font-size:.65rem;opacity:.6;margin-top:2px;">SaaS · Find Leads on Maps</span>
                    </a>

                    <a href="#blueprint" class="mt-1"
                       style="background:#111;color:#B1E78E;border-radius:9px;padding:10px 18px;display:flex;flex-direction:column;text-decoration:none;border:1px solid rgba(177,231,142,.35);line-height:1.3;">
                        <span style="display:flex;align-items:center;gap:6px;font-size:.875rem;font-weight:800;"><i class="fas fa-bolt"></i> 8 Clients Blueprint</span>
                        <span style="font-size:.65rem;opacity:.55;margin-top:2px;">$7.99 · Client Hunting Guide</span>
                    </a>

                    <a href="https://calendly.com/younasdev/strategy-call" target="_blank" class="mt-1"
                       style="background:#fff;color:#000;border-radius:9px;padding:10px 18px;display:flex;flex-direction:column;text-decoration:none;line-height:1.3;">
                        <span style="display:flex;align-items:center;gap:6px;font-size:.875rem;font-weight:800;"><i class="fas fa-calendar-check"></i> Book a Call</span>
                        <span style="font-size:.65rem;opacity:.5;margin-top:2px;">Free Strategy Session</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
