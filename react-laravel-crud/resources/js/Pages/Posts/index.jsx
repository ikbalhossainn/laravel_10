import { Head, Link, usePage } from "@inertiajs/react"; // need to import
import React from "react";
import { Inertia } from "@inertiajs/inertia";



export default function Index(props){
    const { posts } = usePage().props
    console.log(posts)

    function destroy(e) {
        if (confirm("Are you sure you want to delete this user?")) {
            Inertia.delete(route("posts.destroy", e.currentTarget.id));
        }
    }
    return (
        <>
              <div className="py-12">
                    <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div className="p-6 bg-white border-b border-gray-200">
                                <div className="flex items-center justify-between mb-6">
                                    <Link className="px-6 py-2 text-white bg-green-500 rounded-md focus:outline-none" href={ route("posts.create") }>Create Post</Link>
                                </div>
        <table className="table-fixed w-full">
                                    <thead>
                                        <tr className="bg-gray-100">
                                            <th className="px-4 py-2 w-20">No.</th>
                                            <th className="px-4 py-2">Title</th>
                                            <th className="px-4 py-2">Body</th>
                                            <th className="px-4 py-2">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {posts.map(({ id, title, body }) => (
                                            <tr>
                                                <td className="border px-4 py-2">{ id }</td>
                                                <td className="border px-4 py-2">{ title }</td>
                                                <td className="border px-4 py-2">{ body }</td>
                                                <td className="border px-4 py-2">
                                                    <Link tabIndex="1" className="px-4 py-2 text-sm text-white bg-blue-500 rounded" href={route("posts.edit", id)} >Edit</Link>
                                                    <button onClick={destroy} id={id} tabIndex="-1" type="button" className="mx-1 px-4 py-2 text-sm text-white bg-red-500 rounded" >Delete</button>
                                                </td>
                                            </tr>
                                        ))}
                                        {posts.length === 0 && (
                                            <tr>
                                                <td className="px-6 py-4 border-t"colSpan="4">No contacts found.</td>
                                            </tr>
                                        )}
                                    </tbody>
                                </table>
                                </div>
                        </div>
                    </div>
                </div>

        </>

    )
}