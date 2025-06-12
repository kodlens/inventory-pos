import React from 'react'
import { Sidebar, SidebarContent, SidebarFooter, SidebarHeader, SidebarMenu, SidebarMenuButton, SidebarMenuItem } from '../ui/sidebar'
import { NavUser } from '../nav-user'
import { NavFooter } from '../nav-footer'
import { BookOpen, Computer, Folder, LayoutGrid } from 'lucide-react'
import { NavMain } from '../nav-main'
import { NavItem } from '@/types'
import AppLogo from '../app-logo'
import { Link } from '@inertiajs/react';


export default function StaffSideBarMenu() {

    
    const mainNavItems: NavItem[] = [
        {
            title: 'Dashboard',
            href: '/staff/dashboard',
            icon: LayoutGrid,
        },
        {
            title: 'POS',
            href: '/staff/point-of-sale',
            icon: Computer,
        },
    ];

    const footerNavItems: NavItem[] = [
        {
            title: 'Repository',
            href: 'https://github.com/laravel/react-starter-kit',
            icon: Folder,
        },
        {
            title: 'Documentation',
            href: 'https://laravel.com/docs/starter-kits#react',
            icon: BookOpen,
        },
    ];

    return (
        <Sidebar collapsible="icon" variant="inset">
            <SidebarHeader>
                <SidebarMenu>
                    <SidebarMenuItem>
                        <SidebarMenuButton size="lg" asChild>
                            <Link href="/staff/dashboard" prefetch>
                                <AppLogo />
                            </Link>
                        </SidebarMenuButton>
                    </SidebarMenuItem>
                </SidebarMenu>
            </SidebarHeader>

            <SidebarContent>
                <NavMain items={mainNavItems} />
            </SidebarContent>

            <SidebarFooter>
                <NavFooter items={footerNavItems} className="mt-auto" />
                <NavUser />
            </SidebarFooter>
        </Sidebar>
    )
}
