import { PlaceholderPattern } from '@/components/ui/placeholder-pattern'
import AdminLayout from '@/layouts/admin-layout';
import AppLayout from '@/layouts/app-layout'
import { BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/react';

export default function ProductItemIndex() {
    
      const breadcrumbs: BreadcrumbItem[] = [
        {
            title: 'Products/Items',
            href: '/admin/products-items',
        },
    ];

  return (
    <AdminLayout breadcrumbs={breadcrumbs}>
        <Head title="Products/Items" />


    </AdminLayout>
  )
}
