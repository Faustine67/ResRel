import { useEffect, useState } from "react";
import axios from "axios";

interface dataProps {
  id: string;
  name: string;
  description: string;
}

export default function RessourcePage() {
  const [data, setData] = useState<dataProps[] | null>(null);

  useEffect(() => {
    // fetchAPI recupere les données des ressources depuis l'API et met à jour l'état data avec ces données
    fetchAPI();
  }, []);

  async function fetchAPI() {
    try {
      const response = await axios.get(
        "https://jsonplaceholder.typicode.com/ressources"
      );
      //   .then((res) => res.data);
      setData(response.data);
    } catch (error) {
      console.error("Erreur lors de la récupération des ressources :", error);
    }

    return (
      <div>
        <h1>Liste des Ressources</h1>
        <ul>
          {data &&
            data.map((resource) => (
              <>
                <li key={resource.id}>
                  <div>{resource.name}</div>
                  <div>{resource.description}</div>
                </li>
              </>
            ))}
        </ul>
      </div>
    );
  }

  //   const styles = StyleSheet.create({
  //     image: {
  //       width: 50,
  //       height: 50,
  //     },
  //     header: {
  //       flexDirection: "row",
  //       gap: 10,
  //       backgroundColor: "#fff",
  //       justifyContent: "center",
  //       alignItems: "center",
  //       marginBottom: 20,
  //     },
  //     h2: {
  //       fontWeight: "bold",
  //       fontSize: 16,
  //     },
  //     container: {
  //       padding: 20,
  //       backgroundColor: "#fff",
  //       gap: 30,
  //     },
  //   });
}
