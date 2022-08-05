<?php


/**
 * Base class that represents a query for the 'Offres' table.
 *
 * 
 *
 * @method CommonOffresQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonOffresQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonOffresQuery orderByConsultationRef($order = Criteria::ASC) Order by the consultation_ref column
 * @method CommonOffresQuery orderByEntrepriseId($order = Criteria::ASC) Order by the entreprise_id column
 * @method CommonOffresQuery orderByInscritId($order = Criteria::ASC) Order by the inscrit_id column
 * @method CommonOffresQuery orderBySignatureenvxml($order = Criteria::ASC) Order by the signatureenvxml column
 * @method CommonOffresQuery orderByHorodatage($order = Criteria::ASC) Order by the horodatage column
 * @method CommonOffresQuery orderByMailsignataire($order = Criteria::ASC) Order by the mailsignataire column
 * @method CommonOffresQuery orderByUntrusteddate($order = Criteria::ASC) Order by the untrusteddate column
 * @method CommonOffresQuery orderByUntrustedserial($order = Criteria::ASC) Order by the untrustedserial column
 * @method CommonOffresQuery orderByEnvoiComplet($order = Criteria::ASC) Order by the envoi_complet column
 * @method CommonOffresQuery orderByDateDepotDiffere($order = Criteria::ASC) Order by the date_depot_differe column
 * @method CommonOffresQuery orderByHorodatageEnvoiDiffere($order = Criteria::ASC) Order by the horodatage_envoi_differe column
 * @method CommonOffresQuery orderBySignatureenvxmlEnvoiDiffere($order = Criteria::ASC) Order by the signatureenvxml_envoi_differe column
 * @method CommonOffresQuery orderByExternalSerial($order = Criteria::ASC) Order by the external_serial column
 * @method CommonOffresQuery orderByInternalSerial($order = Criteria::ASC) Order by the internal_serial column
 * @method CommonOffresQuery orderByUidOffre($order = Criteria::ASC) Order by the uid_offre column
 * @method CommonOffresQuery orderByOffreSelectionnee($order = Criteria::ASC) Order by the offre_selectionnee column
 * @method CommonOffresQuery orderByObservation($order = Criteria::ASC) Order by the Observation column
 * @method CommonOffresQuery orderByXmlString($order = Criteria::ASC) Order by the xml_string column
 * @method CommonOffresQuery orderByNomEntrepriseInscrit($order = Criteria::ASC) Order by the nom_entreprise_inscrit column
 * @method CommonOffresQuery orderByNomInscrit($order = Criteria::ASC) Order by the nom_inscrit column
 * @method CommonOffresQuery orderByPrenomInscrit($order = Criteria::ASC) Order by the prenom_inscrit column
 * @method CommonOffresQuery orderByAdresseInscrit($order = Criteria::ASC) Order by the adresse_inscrit column
 * @method CommonOffresQuery orderByAdresse2Inscrit($order = Criteria::ASC) Order by the adresse2_inscrit column
 * @method CommonOffresQuery orderByTelephoneInscrit($order = Criteria::ASC) Order by the telephone_inscrit column
 * @method CommonOffresQuery orderByFaxInscrit($order = Criteria::ASC) Order by the fax_inscrit column
 * @method CommonOffresQuery orderByCodePostalInscrit($order = Criteria::ASC) Order by the code_postal_inscrit column
 * @method CommonOffresQuery orderByVilleInscrit($order = Criteria::ASC) Order by the ville_inscrit column
 * @method CommonOffresQuery orderByPaysInscrit($order = Criteria::ASC) Order by the pays_inscrit column
 * @method CommonOffresQuery orderByAcronymePays($order = Criteria::ASC) Order by the acronyme_pays column
 * @method CommonOffresQuery orderBySiretEntreprise($order = Criteria::ASC) Order by the siret_entreprise column
 * @method CommonOffresQuery orderByIdentifiantNational($order = Criteria::ASC) Order by the identifiant_national column
 * @method CommonOffresQuery orderByEmailInscrit($order = Criteria::ASC) Order by the email_inscrit column
 * @method CommonOffresQuery orderBySiretInscrit($order = Criteria::ASC) Order by the siret_inscrit column
 * @method CommonOffresQuery orderByNomEntreprise($order = Criteria::ASC) Order by the nom_entreprise column
 * @method CommonOffresQuery orderByHorodatageAnnulation($order = Criteria::ASC) Order by the horodatage_annulation column
 * @method CommonOffresQuery orderByDateAnnulation($order = Criteria::ASC) Order by the date_annulation column
 * @method CommonOffresQuery orderBySignatureAnnulation($order = Criteria::ASC) Order by the signature_annulation column
 * @method CommonOffresQuery orderByDepotAnnule($order = Criteria::ASC) Order by the depot_annule column
 * @method CommonOffresQuery orderByStringAnnulation($order = Criteria::ASC) Order by the string_annulation column
 * @method CommonOffresQuery orderByVerificationCertificatAnnulation($order = Criteria::ASC) Order by the verification_certificat_annulation column
 * @method CommonOffresQuery orderByOffreVariante($order = Criteria::ASC) Order by the offre_variante column
 * @method CommonOffresQuery orderByReponsePasAPas($order = Criteria::ASC) Order by the reponse_pas_a_pas column
 * @method CommonOffresQuery orderByNumeroReponse($order = Criteria::ASC) Order by the numero_reponse column
 * @method CommonOffresQuery orderByStatutOffres($order = Criteria::ASC) Order by the statut_offres column
 * @method CommonOffresQuery orderByDateHeureOuverture($order = Criteria::ASC) Order by the date_heure_ouverture column
 * @method CommonOffresQuery orderByAgentidOuverture($order = Criteria::ASC) Order by the agentid_ouverture column
 * @method CommonOffresQuery orderByAgentidOuverture2($order = Criteria::ASC) Order by the agentid_ouverture2 column
 * @method CommonOffresQuery orderByDateHeureOuvertureAgent2($order = Criteria::ASC) Order by the date_heure_ouverture_agent2 column
 * @method CommonOffresQuery orderByCryptageReponse($order = Criteria::ASC) Order by the cryptage_reponse column
 * @method CommonOffresQuery orderByNomAgentOuverture($order = Criteria::ASC) Order by the nom_agent_ouverture column
 * @method CommonOffresQuery orderByAgentTelechargementOffre($order = Criteria::ASC) Order by the agent_telechargement_offre column
 * @method CommonOffresQuery orderByDateTelechargementOffre($order = Criteria::ASC) Order by the date_telechargement_offre column
 * @method CommonOffresQuery orderByRepertoireTelechargementOffre($order = Criteria::ASC) Order by the repertoire_telechargement_offre column
 * @method CommonOffresQuery orderByIfuEntreprise($order = Criteria::ASC) Order by the ifu_entreprise column
 * @method CommonOffresQuery orderByTypeEntreprise($order = Criteria::ASC) Order by the type_entreprise column
 *
 * @method CommonOffresQuery groupById() Group by the id column
 * @method CommonOffresQuery groupByOrganisme() Group by the organisme column
 * @method CommonOffresQuery groupByConsultationRef() Group by the consultation_ref column
 * @method CommonOffresQuery groupByEntrepriseId() Group by the entreprise_id column
 * @method CommonOffresQuery groupByInscritId() Group by the inscrit_id column
 * @method CommonOffresQuery groupBySignatureenvxml() Group by the signatureenvxml column
 * @method CommonOffresQuery groupByHorodatage() Group by the horodatage column
 * @method CommonOffresQuery groupByMailsignataire() Group by the mailsignataire column
 * @method CommonOffresQuery groupByUntrusteddate() Group by the untrusteddate column
 * @method CommonOffresQuery groupByUntrustedserial() Group by the untrustedserial column
 * @method CommonOffresQuery groupByEnvoiComplet() Group by the envoi_complet column
 * @method CommonOffresQuery groupByDateDepotDiffere() Group by the date_depot_differe column
 * @method CommonOffresQuery groupByHorodatageEnvoiDiffere() Group by the horodatage_envoi_differe column
 * @method CommonOffresQuery groupBySignatureenvxmlEnvoiDiffere() Group by the signatureenvxml_envoi_differe column
 * @method CommonOffresQuery groupByExternalSerial() Group by the external_serial column
 * @method CommonOffresQuery groupByInternalSerial() Group by the internal_serial column
 * @method CommonOffresQuery groupByUidOffre() Group by the uid_offre column
 * @method CommonOffresQuery groupByOffreSelectionnee() Group by the offre_selectionnee column
 * @method CommonOffresQuery groupByObservation() Group by the Observation column
 * @method CommonOffresQuery groupByXmlString() Group by the xml_string column
 * @method CommonOffresQuery groupByNomEntrepriseInscrit() Group by the nom_entreprise_inscrit column
 * @method CommonOffresQuery groupByNomInscrit() Group by the nom_inscrit column
 * @method CommonOffresQuery groupByPrenomInscrit() Group by the prenom_inscrit column
 * @method CommonOffresQuery groupByAdresseInscrit() Group by the adresse_inscrit column
 * @method CommonOffresQuery groupByAdresse2Inscrit() Group by the adresse2_inscrit column
 * @method CommonOffresQuery groupByTelephoneInscrit() Group by the telephone_inscrit column
 * @method CommonOffresQuery groupByFaxInscrit() Group by the fax_inscrit column
 * @method CommonOffresQuery groupByCodePostalInscrit() Group by the code_postal_inscrit column
 * @method CommonOffresQuery groupByVilleInscrit() Group by the ville_inscrit column
 * @method CommonOffresQuery groupByPaysInscrit() Group by the pays_inscrit column
 * @method CommonOffresQuery groupByAcronymePays() Group by the acronyme_pays column
 * @method CommonOffresQuery groupBySiretEntreprise() Group by the siret_entreprise column
 * @method CommonOffresQuery groupByIdentifiantNational() Group by the identifiant_national column
 * @method CommonOffresQuery groupByEmailInscrit() Group by the email_inscrit column
 * @method CommonOffresQuery groupBySiretInscrit() Group by the siret_inscrit column
 * @method CommonOffresQuery groupByNomEntreprise() Group by the nom_entreprise column
 * @method CommonOffresQuery groupByHorodatageAnnulation() Group by the horodatage_annulation column
 * @method CommonOffresQuery groupByDateAnnulation() Group by the date_annulation column
 * @method CommonOffresQuery groupBySignatureAnnulation() Group by the signature_annulation column
 * @method CommonOffresQuery groupByDepotAnnule() Group by the depot_annule column
 * @method CommonOffresQuery groupByStringAnnulation() Group by the string_annulation column
 * @method CommonOffresQuery groupByVerificationCertificatAnnulation() Group by the verification_certificat_annulation column
 * @method CommonOffresQuery groupByOffreVariante() Group by the offre_variante column
 * @method CommonOffresQuery groupByReponsePasAPas() Group by the reponse_pas_a_pas column
 * @method CommonOffresQuery groupByNumeroReponse() Group by the numero_reponse column
 * @method CommonOffresQuery groupByStatutOffres() Group by the statut_offres column
 * @method CommonOffresQuery groupByDateHeureOuverture() Group by the date_heure_ouverture column
 * @method CommonOffresQuery groupByAgentidOuverture() Group by the agentid_ouverture column
 * @method CommonOffresQuery groupByAgentidOuverture2() Group by the agentid_ouverture2 column
 * @method CommonOffresQuery groupByDateHeureOuvertureAgent2() Group by the date_heure_ouverture_agent2 column
 * @method CommonOffresQuery groupByCryptageReponse() Group by the cryptage_reponse column
 * @method CommonOffresQuery groupByNomAgentOuverture() Group by the nom_agent_ouverture column
 * @method CommonOffresQuery groupByAgentTelechargementOffre() Group by the agent_telechargement_offre column
 * @method CommonOffresQuery groupByDateTelechargementOffre() Group by the date_telechargement_offre column
 * @method CommonOffresQuery groupByRepertoireTelechargementOffre() Group by the repertoire_telechargement_offre column
 * @method CommonOffresQuery groupByIfuEntreprise() Group by the ifu_entreprise column
 * @method CommonOffresQuery groupByTypeEntreprise() Group by the type_entreprise column
 *
 * @method CommonOffresQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonOffresQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonOffresQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonOffresQuery leftJoinCommonConsultation($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonConsultation relation
 * @method CommonOffresQuery rightJoinCommonConsultation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonConsultation relation
 * @method CommonOffresQuery innerJoinCommonConsultation($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonConsultation relation
 *
 * @method CommonOffres findOne(PropelPDO $con = null) Return the first CommonOffres matching the query
 * @method CommonOffres findOneOrCreate(PropelPDO $con = null) Return the first CommonOffres matching the query, or a new CommonOffres object populated from the query conditions when no match is found
 *
 * @method CommonOffres findOneById(int $id) Return the first CommonOffres filtered by the id column
 * @method CommonOffres findOneByOrganisme(string $organisme) Return the first CommonOffres filtered by the organisme column
 * @method CommonOffres findOneByConsultationRef(int $consultation_ref) Return the first CommonOffres filtered by the consultation_ref column
 * @method CommonOffres findOneByEntrepriseId(int $entreprise_id) Return the first CommonOffres filtered by the entreprise_id column
 * @method CommonOffres findOneByInscritId(int $inscrit_id) Return the first CommonOffres filtered by the inscrit_id column
 * @method CommonOffres findOneBySignatureenvxml(resource $signatureenvxml) Return the first CommonOffres filtered by the signatureenvxml column
 * @method CommonOffres findOneByHorodatage(resource $horodatage) Return the first CommonOffres filtered by the horodatage column
 * @method CommonOffres findOneByMailsignataire(string $mailsignataire) Return the first CommonOffres filtered by the mailsignataire column
 * @method CommonOffres findOneByUntrusteddate(string $untrusteddate) Return the first CommonOffres filtered by the untrusteddate column
 * @method CommonOffres findOneByUntrustedserial(string $untrustedserial) Return the first CommonOffres filtered by the untrustedserial column
 * @method CommonOffres findOneByEnvoiComplet(string $envoi_complet) Return the first CommonOffres filtered by the envoi_complet column
 * @method CommonOffres findOneByDateDepotDiffere(string $date_depot_differe) Return the first CommonOffres filtered by the date_depot_differe column
 * @method CommonOffres findOneByHorodatageEnvoiDiffere(resource $horodatage_envoi_differe) Return the first CommonOffres filtered by the horodatage_envoi_differe column
 * @method CommonOffres findOneBySignatureenvxmlEnvoiDiffere(resource $signatureenvxml_envoi_differe) Return the first CommonOffres filtered by the signatureenvxml_envoi_differe column
 * @method CommonOffres findOneByExternalSerial(string $external_serial) Return the first CommonOffres filtered by the external_serial column
 * @method CommonOffres findOneByInternalSerial(string $internal_serial) Return the first CommonOffres filtered by the internal_serial column
 * @method CommonOffres findOneByUidOffre(string $uid_offre) Return the first CommonOffres filtered by the uid_offre column
 * @method CommonOffres findOneByOffreSelectionnee(int $offre_selectionnee) Return the first CommonOffres filtered by the offre_selectionnee column
 * @method CommonOffres findOneByObservation(string $Observation) Return the first CommonOffres filtered by the Observation column
 * @method CommonOffres findOneByXmlString(string $xml_string) Return the first CommonOffres filtered by the xml_string column
 * @method CommonOffres findOneByNomEntrepriseInscrit(string $nom_entreprise_inscrit) Return the first CommonOffres filtered by the nom_entreprise_inscrit column
 * @method CommonOffres findOneByNomInscrit(string $nom_inscrit) Return the first CommonOffres filtered by the nom_inscrit column
 * @method CommonOffres findOneByPrenomInscrit(string $prenom_inscrit) Return the first CommonOffres filtered by the prenom_inscrit column
 * @method CommonOffres findOneByAdresseInscrit(string $adresse_inscrit) Return the first CommonOffres filtered by the adresse_inscrit column
 * @method CommonOffres findOneByAdresse2Inscrit(string $adresse2_inscrit) Return the first CommonOffres filtered by the adresse2_inscrit column
 * @method CommonOffres findOneByTelephoneInscrit(string $telephone_inscrit) Return the first CommonOffres filtered by the telephone_inscrit column
 * @method CommonOffres findOneByFaxInscrit(string $fax_inscrit) Return the first CommonOffres filtered by the fax_inscrit column
 * @method CommonOffres findOneByCodePostalInscrit(string $code_postal_inscrit) Return the first CommonOffres filtered by the code_postal_inscrit column
 * @method CommonOffres findOneByVilleInscrit(string $ville_inscrit) Return the first CommonOffres filtered by the ville_inscrit column
 * @method CommonOffres findOneByPaysInscrit(string $pays_inscrit) Return the first CommonOffres filtered by the pays_inscrit column
 * @method CommonOffres findOneByAcronymePays(string $acronyme_pays) Return the first CommonOffres filtered by the acronyme_pays column
 * @method CommonOffres findOneBySiretEntreprise(string $siret_entreprise) Return the first CommonOffres filtered by the siret_entreprise column
 * @method CommonOffres findOneByIdentifiantNational(string $identifiant_national) Return the first CommonOffres filtered by the identifiant_national column
 * @method CommonOffres findOneByEmailInscrit(string $email_inscrit) Return the first CommonOffres filtered by the email_inscrit column
 * @method CommonOffres findOneBySiretInscrit(string $siret_inscrit) Return the first CommonOffres filtered by the siret_inscrit column
 * @method CommonOffres findOneByNomEntreprise(string $nom_entreprise) Return the first CommonOffres filtered by the nom_entreprise column
 * @method CommonOffres findOneByHorodatageAnnulation(resource $horodatage_annulation) Return the first CommonOffres filtered by the horodatage_annulation column
 * @method CommonOffres findOneByDateAnnulation(string $date_annulation) Return the first CommonOffres filtered by the date_annulation column
 * @method CommonOffres findOneBySignatureAnnulation(string $signature_annulation) Return the first CommonOffres filtered by the signature_annulation column
 * @method CommonOffres findOneByDepotAnnule(string $depot_annule) Return the first CommonOffres filtered by the depot_annule column
 * @method CommonOffres findOneByStringAnnulation(string $string_annulation) Return the first CommonOffres filtered by the string_annulation column
 * @method CommonOffres findOneByVerificationCertificatAnnulation(string $verification_certificat_annulation) Return the first CommonOffres filtered by the verification_certificat_annulation column
 * @method CommonOffres findOneByOffreVariante(string $offre_variante) Return the first CommonOffres filtered by the offre_variante column
 * @method CommonOffres findOneByReponsePasAPas(string $reponse_pas_a_pas) Return the first CommonOffres filtered by the reponse_pas_a_pas column
 * @method CommonOffres findOneByNumeroReponse(int $numero_reponse) Return the first CommonOffres filtered by the numero_reponse column
 * @method CommonOffres findOneByStatutOffres(int $statut_offres) Return the first CommonOffres filtered by the statut_offres column
 * @method CommonOffres findOneByDateHeureOuverture(string $date_heure_ouverture) Return the first CommonOffres filtered by the date_heure_ouverture column
 * @method CommonOffres findOneByAgentidOuverture(int $agentid_ouverture) Return the first CommonOffres filtered by the agentid_ouverture column
 * @method CommonOffres findOneByAgentidOuverture2(int $agentid_ouverture2) Return the first CommonOffres filtered by the agentid_ouverture2 column
 * @method CommonOffres findOneByDateHeureOuvertureAgent2(string $date_heure_ouverture_agent2) Return the first CommonOffres filtered by the date_heure_ouverture_agent2 column
 * @method CommonOffres findOneByCryptageReponse(string $cryptage_reponse) Return the first CommonOffres filtered by the cryptage_reponse column
 * @method CommonOffres findOneByNomAgentOuverture(string $nom_agent_ouverture) Return the first CommonOffres filtered by the nom_agent_ouverture column
 * @method CommonOffres findOneByAgentTelechargementOffre(int $agent_telechargement_offre) Return the first CommonOffres filtered by the agent_telechargement_offre column
 * @method CommonOffres findOneByDateTelechargementOffre(string $date_telechargement_offre) Return the first CommonOffres filtered by the date_telechargement_offre column
 * @method CommonOffres findOneByRepertoireTelechargementOffre(string $repertoire_telechargement_offre) Return the first CommonOffres filtered by the repertoire_telechargement_offre column
 * @method CommonOffres findOneByIfuEntreprise(string $ifu_entreprise) Return the first CommonOffres filtered by the ifu_entreprise column
 * @method CommonOffres findOneByTypeEntreprise(string $type_entreprise) Return the first CommonOffres filtered by the type_entreprise column
 *
 * @method array findById(int $id) Return CommonOffres objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonOffres objects filtered by the organisme column
 * @method array findByConsultationRef(int $consultation_ref) Return CommonOffres objects filtered by the consultation_ref column
 * @method array findByEntrepriseId(int $entreprise_id) Return CommonOffres objects filtered by the entreprise_id column
 * @method array findByInscritId(int $inscrit_id) Return CommonOffres objects filtered by the inscrit_id column
 * @method array findBySignatureenvxml(resource $signatureenvxml) Return CommonOffres objects filtered by the signatureenvxml column
 * @method array findByHorodatage(resource $horodatage) Return CommonOffres objects filtered by the horodatage column
 * @method array findByMailsignataire(string $mailsignataire) Return CommonOffres objects filtered by the mailsignataire column
 * @method array findByUntrusteddate(string $untrusteddate) Return CommonOffres objects filtered by the untrusteddate column
 * @method array findByUntrustedserial(string $untrustedserial) Return CommonOffres objects filtered by the untrustedserial column
 * @method array findByEnvoiComplet(string $envoi_complet) Return CommonOffres objects filtered by the envoi_complet column
 * @method array findByDateDepotDiffere(string $date_depot_differe) Return CommonOffres objects filtered by the date_depot_differe column
 * @method array findByHorodatageEnvoiDiffere(resource $horodatage_envoi_differe) Return CommonOffres objects filtered by the horodatage_envoi_differe column
 * @method array findBySignatureenvxmlEnvoiDiffere(resource $signatureenvxml_envoi_differe) Return CommonOffres objects filtered by the signatureenvxml_envoi_differe column
 * @method array findByExternalSerial(string $external_serial) Return CommonOffres objects filtered by the external_serial column
 * @method array findByInternalSerial(string $internal_serial) Return CommonOffres objects filtered by the internal_serial column
 * @method array findByUidOffre(string $uid_offre) Return CommonOffres objects filtered by the uid_offre column
 * @method array findByOffreSelectionnee(int $offre_selectionnee) Return CommonOffres objects filtered by the offre_selectionnee column
 * @method array findByObservation(string $Observation) Return CommonOffres objects filtered by the Observation column
 * @method array findByXmlString(string $xml_string) Return CommonOffres objects filtered by the xml_string column
 * @method array findByNomEntrepriseInscrit(string $nom_entreprise_inscrit) Return CommonOffres objects filtered by the nom_entreprise_inscrit column
 * @method array findByNomInscrit(string $nom_inscrit) Return CommonOffres objects filtered by the nom_inscrit column
 * @method array findByPrenomInscrit(string $prenom_inscrit) Return CommonOffres objects filtered by the prenom_inscrit column
 * @method array findByAdresseInscrit(string $adresse_inscrit) Return CommonOffres objects filtered by the adresse_inscrit column
 * @method array findByAdresse2Inscrit(string $adresse2_inscrit) Return CommonOffres objects filtered by the adresse2_inscrit column
 * @method array findByTelephoneInscrit(string $telephone_inscrit) Return CommonOffres objects filtered by the telephone_inscrit column
 * @method array findByFaxInscrit(string $fax_inscrit) Return CommonOffres objects filtered by the fax_inscrit column
 * @method array findByCodePostalInscrit(string $code_postal_inscrit) Return CommonOffres objects filtered by the code_postal_inscrit column
 * @method array findByVilleInscrit(string $ville_inscrit) Return CommonOffres objects filtered by the ville_inscrit column
 * @method array findByPaysInscrit(string $pays_inscrit) Return CommonOffres objects filtered by the pays_inscrit column
 * @method array findByAcronymePays(string $acronyme_pays) Return CommonOffres objects filtered by the acronyme_pays column
 * @method array findBySiretEntreprise(string $siret_entreprise) Return CommonOffres objects filtered by the siret_entreprise column
 * @method array findByIdentifiantNational(string $identifiant_national) Return CommonOffres objects filtered by the identifiant_national column
 * @method array findByEmailInscrit(string $email_inscrit) Return CommonOffres objects filtered by the email_inscrit column
 * @method array findBySiretInscrit(string $siret_inscrit) Return CommonOffres objects filtered by the siret_inscrit column
 * @method array findByNomEntreprise(string $nom_entreprise) Return CommonOffres objects filtered by the nom_entreprise column
 * @method array findByHorodatageAnnulation(resource $horodatage_annulation) Return CommonOffres objects filtered by the horodatage_annulation column
 * @method array findByDateAnnulation(string $date_annulation) Return CommonOffres objects filtered by the date_annulation column
 * @method array findBySignatureAnnulation(string $signature_annulation) Return CommonOffres objects filtered by the signature_annulation column
 * @method array findByDepotAnnule(string $depot_annule) Return CommonOffres objects filtered by the depot_annule column
 * @method array findByStringAnnulation(string $string_annulation) Return CommonOffres objects filtered by the string_annulation column
 * @method array findByVerificationCertificatAnnulation(string $verification_certificat_annulation) Return CommonOffres objects filtered by the verification_certificat_annulation column
 * @method array findByOffreVariante(string $offre_variante) Return CommonOffres objects filtered by the offre_variante column
 * @method array findByReponsePasAPas(string $reponse_pas_a_pas) Return CommonOffres objects filtered by the reponse_pas_a_pas column
 * @method array findByNumeroReponse(int $numero_reponse) Return CommonOffres objects filtered by the numero_reponse column
 * @method array findByStatutOffres(int $statut_offres) Return CommonOffres objects filtered by the statut_offres column
 * @method array findByDateHeureOuverture(string $date_heure_ouverture) Return CommonOffres objects filtered by the date_heure_ouverture column
 * @method array findByAgentidOuverture(int $agentid_ouverture) Return CommonOffres objects filtered by the agentid_ouverture column
 * @method array findByAgentidOuverture2(int $agentid_ouverture2) Return CommonOffres objects filtered by the agentid_ouverture2 column
 * @method array findByDateHeureOuvertureAgent2(string $date_heure_ouverture_agent2) Return CommonOffres objects filtered by the date_heure_ouverture_agent2 column
 * @method array findByCryptageReponse(string $cryptage_reponse) Return CommonOffres objects filtered by the cryptage_reponse column
 * @method array findByNomAgentOuverture(string $nom_agent_ouverture) Return CommonOffres objects filtered by the nom_agent_ouverture column
 * @method array findByAgentTelechargementOffre(int $agent_telechargement_offre) Return CommonOffres objects filtered by the agent_telechargement_offre column
 * @method array findByDateTelechargementOffre(string $date_telechargement_offre) Return CommonOffres objects filtered by the date_telechargement_offre column
 * @method array findByRepertoireTelechargementOffre(string $repertoire_telechargement_offre) Return CommonOffres objects filtered by the repertoire_telechargement_offre column
 * @method array findByIfuEntreprise(string $ifu_entreprise) Return CommonOffres objects filtered by the ifu_entreprise column
 * @method array findByTypeEntreprise(string $type_entreprise) Return CommonOffres objects filtered by the type_entreprise column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonOffresQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonOffresQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonOffres', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonOffresQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonOffresQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonOffresQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonOffresQuery) {
            return $criteria;
        }
        $query = new CommonOffresQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query 
                         A Primary key composition: [$id, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonOffres|CommonOffres[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonOffresPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonOffresPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonOffres A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `consultation_ref`, `entreprise_id`, `inscrit_id`, `signatureenvxml`, `horodatage`, `mailsignataire`, `untrusteddate`, `untrustedserial`, `envoi_complet`, `date_depot_differe`, `horodatage_envoi_differe`, `signatureenvxml_envoi_differe`, `external_serial`, `internal_serial`, `uid_offre`, `offre_selectionnee`, `Observation`, `xml_string`, `nom_entreprise_inscrit`, `nom_inscrit`, `prenom_inscrit`, `adresse_inscrit`, `adresse2_inscrit`, `telephone_inscrit`, `fax_inscrit`, `code_postal_inscrit`, `ville_inscrit`, `pays_inscrit`, `acronyme_pays`, `siret_entreprise`, `identifiant_national`, `email_inscrit`, `siret_inscrit`, `nom_entreprise`, `horodatage_annulation`, `date_annulation`, `signature_annulation`, `depot_annule`, `string_annulation`, `verification_certificat_annulation`, `offre_variante`, `reponse_pas_a_pas`, `numero_reponse`, `statut_offres`, `date_heure_ouverture`, `agentid_ouverture`, `agentid_ouverture2`, `date_heure_ouverture_agent2`, `cryptage_reponse`, `nom_agent_ouverture`, `agent_telechargement_offre`, `date_telechargement_offre`, `repertoire_telechargement_offre`, `ifu_entreprise`, `type_entreprise` FROM `Offres` WHERE `id` = :p0 AND `organisme` = :p1';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonOffres();
            $obj->hydrate($row);
            CommonOffresPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return CommonOffres|CommonOffres[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|CommonOffres[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonOffresPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonOffresPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonOffresPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonOffresPeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id >= 12
     * $query->filterById(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonOffresPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonOffresPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the organisme column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganisme('fooValue');   // WHERE organisme = 'fooValue'
     * $query->filterByOrganisme('%fooValue%'); // WHERE organisme LIKE '%fooValue%'
     * </code>
     *
     * @param     string $organisme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByOrganisme($organisme = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($organisme)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $organisme)) {
                $organisme = str_replace('*', '%', $organisme);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the consultation_ref column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultationRef(1234); // WHERE consultation_ref = 1234
     * $query->filterByConsultationRef(array(12, 34)); // WHERE consultation_ref IN (12, 34)
     * $query->filterByConsultationRef(array('min' => 12)); // WHERE consultation_ref >= 12
     * $query->filterByConsultationRef(array('max' => 12)); // WHERE consultation_ref <= 12
     * </code>
     *
     * @see       filterByCommonConsultation()
     *
     * @param     mixed $consultationRef The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByConsultationRef($consultationRef = null, $comparison = null)
    {
        if (is_array($consultationRef)) {
            $useMinMax = false;
            if (isset($consultationRef['min'])) {
                $this->addUsingAlias(CommonOffresPeer::CONSULTATION_REF, $consultationRef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($consultationRef['max'])) {
                $this->addUsingAlias(CommonOffresPeer::CONSULTATION_REF, $consultationRef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::CONSULTATION_REF, $consultationRef, $comparison);
    }

    /**
     * Filter the query on the entreprise_id column
     *
     * Example usage:
     * <code>
     * $query->filterByEntrepriseId(1234); // WHERE entreprise_id = 1234
     * $query->filterByEntrepriseId(array(12, 34)); // WHERE entreprise_id IN (12, 34)
     * $query->filterByEntrepriseId(array('min' => 12)); // WHERE entreprise_id >= 12
     * $query->filterByEntrepriseId(array('max' => 12)); // WHERE entreprise_id <= 12
     * </code>
     *
     * @param     mixed $entrepriseId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByEntrepriseId($entrepriseId = null, $comparison = null)
    {
        if (is_array($entrepriseId)) {
            $useMinMax = false;
            if (isset($entrepriseId['min'])) {
                $this->addUsingAlias(CommonOffresPeer::ENTREPRISE_ID, $entrepriseId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entrepriseId['max'])) {
                $this->addUsingAlias(CommonOffresPeer::ENTREPRISE_ID, $entrepriseId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::ENTREPRISE_ID, $entrepriseId, $comparison);
    }

    /**
     * Filter the query on the inscrit_id column
     *
     * Example usage:
     * <code>
     * $query->filterByInscritId(1234); // WHERE inscrit_id = 1234
     * $query->filterByInscritId(array(12, 34)); // WHERE inscrit_id IN (12, 34)
     * $query->filterByInscritId(array('min' => 12)); // WHERE inscrit_id >= 12
     * $query->filterByInscritId(array('max' => 12)); // WHERE inscrit_id <= 12
     * </code>
     *
     * @param     mixed $inscritId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByInscritId($inscritId = null, $comparison = null)
    {
        if (is_array($inscritId)) {
            $useMinMax = false;
            if (isset($inscritId['min'])) {
                $this->addUsingAlias(CommonOffresPeer::INSCRIT_ID, $inscritId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inscritId['max'])) {
                $this->addUsingAlias(CommonOffresPeer::INSCRIT_ID, $inscritId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::INSCRIT_ID, $inscritId, $comparison);
    }

    /**
     * Filter the query on the signatureenvxml column
     *
     * @param     mixed $signatureenvxml The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterBySignatureenvxml($signatureenvxml = null, $comparison = null)
    {

        return $this->addUsingAlias(CommonOffresPeer::SIGNATUREENVXML, $signatureenvxml, $comparison);
    }

    /**
     * Filter the query on the horodatage column
     *
     * @param     mixed $horodatage The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByHorodatage($horodatage = null, $comparison = null)
    {

        return $this->addUsingAlias(CommonOffresPeer::HORODATAGE, $horodatage, $comparison);
    }

    /**
     * Filter the query on the mailsignataire column
     *
     * Example usage:
     * <code>
     * $query->filterByMailsignataire('fooValue');   // WHERE mailsignataire = 'fooValue'
     * $query->filterByMailsignataire('%fooValue%'); // WHERE mailsignataire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mailsignataire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByMailsignataire($mailsignataire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mailsignataire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mailsignataire)) {
                $mailsignataire = str_replace('*', '%', $mailsignataire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::MAILSIGNATAIRE, $mailsignataire, $comparison);
    }

    /**
     * Filter the query on the untrusteddate column
     *
     * Example usage:
     * <code>
     * $query->filterByUntrusteddate('2011-03-14'); // WHERE untrusteddate = '2011-03-14'
     * $query->filterByUntrusteddate('now'); // WHERE untrusteddate = '2011-03-14'
     * $query->filterByUntrusteddate(array('max' => 'yesterday')); // WHERE untrusteddate > '2011-03-13'
     * </code>
     *
     * @param     mixed $untrusteddate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByUntrusteddate($untrusteddate = null, $comparison = null)
    {
        if (is_array($untrusteddate)) {
            $useMinMax = false;
            if (isset($untrusteddate['min'])) {
                $this->addUsingAlias(CommonOffresPeer::UNTRUSTEDDATE, $untrusteddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($untrusteddate['max'])) {
                $this->addUsingAlias(CommonOffresPeer::UNTRUSTEDDATE, $untrusteddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::UNTRUSTEDDATE, $untrusteddate, $comparison);
    }

    /**
     * Filter the query on the untrustedserial column
     *
     * Example usage:
     * <code>
     * $query->filterByUntrustedserial('fooValue');   // WHERE untrustedserial = 'fooValue'
     * $query->filterByUntrustedserial('%fooValue%'); // WHERE untrustedserial LIKE '%fooValue%'
     * </code>
     *
     * @param     string $untrustedserial The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByUntrustedserial($untrustedserial = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($untrustedserial)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $untrustedserial)) {
                $untrustedserial = str_replace('*', '%', $untrustedserial);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::UNTRUSTEDSERIAL, $untrustedserial, $comparison);
    }

    /**
     * Filter the query on the envoi_complet column
     *
     * Example usage:
     * <code>
     * $query->filterByEnvoiComplet('fooValue');   // WHERE envoi_complet = 'fooValue'
     * $query->filterByEnvoiComplet('%fooValue%'); // WHERE envoi_complet LIKE '%fooValue%'
     * </code>
     *
     * @param     string $envoiComplet The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByEnvoiComplet($envoiComplet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($envoiComplet)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $envoiComplet)) {
                $envoiComplet = str_replace('*', '%', $envoiComplet);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::ENVOI_COMPLET, $envoiComplet, $comparison);
    }

    /**
     * Filter the query on the date_depot_differe column
     *
     * Example usage:
     * <code>
     * $query->filterByDateDepotDiffere('2011-03-14'); // WHERE date_depot_differe = '2011-03-14'
     * $query->filterByDateDepotDiffere('now'); // WHERE date_depot_differe = '2011-03-14'
     * $query->filterByDateDepotDiffere(array('max' => 'yesterday')); // WHERE date_depot_differe > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateDepotDiffere The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByDateDepotDiffere($dateDepotDiffere = null, $comparison = null)
    {
        if (is_array($dateDepotDiffere)) {
            $useMinMax = false;
            if (isset($dateDepotDiffere['min'])) {
                $this->addUsingAlias(CommonOffresPeer::DATE_DEPOT_DIFFERE, $dateDepotDiffere['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateDepotDiffere['max'])) {
                $this->addUsingAlias(CommonOffresPeer::DATE_DEPOT_DIFFERE, $dateDepotDiffere['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::DATE_DEPOT_DIFFERE, $dateDepotDiffere, $comparison);
    }

    /**
     * Filter the query on the horodatage_envoi_differe column
     *
     * @param     mixed $horodatageEnvoiDiffere The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByHorodatageEnvoiDiffere($horodatageEnvoiDiffere = null, $comparison = null)
    {

        return $this->addUsingAlias(CommonOffresPeer::HORODATAGE_ENVOI_DIFFERE, $horodatageEnvoiDiffere, $comparison);
    }

    /**
     * Filter the query on the signatureenvxml_envoi_differe column
     *
     * @param     mixed $signatureenvxmlEnvoiDiffere The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterBySignatureenvxmlEnvoiDiffere($signatureenvxmlEnvoiDiffere = null, $comparison = null)
    {

        return $this->addUsingAlias(CommonOffresPeer::SIGNATUREENVXML_ENVOI_DIFFERE, $signatureenvxmlEnvoiDiffere, $comparison);
    }

    /**
     * Filter the query on the external_serial column
     *
     * Example usage:
     * <code>
     * $query->filterByExternalSerial('fooValue');   // WHERE external_serial = 'fooValue'
     * $query->filterByExternalSerial('%fooValue%'); // WHERE external_serial LIKE '%fooValue%'
     * </code>
     *
     * @param     string $externalSerial The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByExternalSerial($externalSerial = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($externalSerial)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $externalSerial)) {
                $externalSerial = str_replace('*', '%', $externalSerial);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::EXTERNAL_SERIAL, $externalSerial, $comparison);
    }

    /**
     * Filter the query on the internal_serial column
     *
     * Example usage:
     * <code>
     * $query->filterByInternalSerial('fooValue');   // WHERE internal_serial = 'fooValue'
     * $query->filterByInternalSerial('%fooValue%'); // WHERE internal_serial LIKE '%fooValue%'
     * </code>
     *
     * @param     string $internalSerial The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByInternalSerial($internalSerial = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($internalSerial)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $internalSerial)) {
                $internalSerial = str_replace('*', '%', $internalSerial);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::INTERNAL_SERIAL, $internalSerial, $comparison);
    }

    /**
     * Filter the query on the uid_offre column
     *
     * Example usage:
     * <code>
     * $query->filterByUidOffre('fooValue');   // WHERE uid_offre = 'fooValue'
     * $query->filterByUidOffre('%fooValue%'); // WHERE uid_offre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $uidOffre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByUidOffre($uidOffre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($uidOffre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $uidOffre)) {
                $uidOffre = str_replace('*', '%', $uidOffre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::UID_OFFRE, $uidOffre, $comparison);
    }

    /**
     * Filter the query on the offre_selectionnee column
     *
     * Example usage:
     * <code>
     * $query->filterByOffreSelectionnee(1234); // WHERE offre_selectionnee = 1234
     * $query->filterByOffreSelectionnee(array(12, 34)); // WHERE offre_selectionnee IN (12, 34)
     * $query->filterByOffreSelectionnee(array('min' => 12)); // WHERE offre_selectionnee >= 12
     * $query->filterByOffreSelectionnee(array('max' => 12)); // WHERE offre_selectionnee <= 12
     * </code>
     *
     * @param     mixed $offreSelectionnee The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByOffreSelectionnee($offreSelectionnee = null, $comparison = null)
    {
        if (is_array($offreSelectionnee)) {
            $useMinMax = false;
            if (isset($offreSelectionnee['min'])) {
                $this->addUsingAlias(CommonOffresPeer::OFFRE_SELECTIONNEE, $offreSelectionnee['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($offreSelectionnee['max'])) {
                $this->addUsingAlias(CommonOffresPeer::OFFRE_SELECTIONNEE, $offreSelectionnee['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::OFFRE_SELECTIONNEE, $offreSelectionnee, $comparison);
    }

    /**
     * Filter the query on the Observation column
     *
     * Example usage:
     * <code>
     * $query->filterByObservation('fooValue');   // WHERE Observation = 'fooValue'
     * $query->filterByObservation('%fooValue%'); // WHERE Observation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $observation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByObservation($observation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($observation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $observation)) {
                $observation = str_replace('*', '%', $observation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::OBSERVATION, $observation, $comparison);
    }

    /**
     * Filter the query on the xml_string column
     *
     * Example usage:
     * <code>
     * $query->filterByXmlString('fooValue');   // WHERE xml_string = 'fooValue'
     * $query->filterByXmlString('%fooValue%'); // WHERE xml_string LIKE '%fooValue%'
     * </code>
     *
     * @param     string $xmlString The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByXmlString($xmlString = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($xmlString)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $xmlString)) {
                $xmlString = str_replace('*', '%', $xmlString);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::XML_STRING, $xmlString, $comparison);
    }

    /**
     * Filter the query on the nom_entreprise_inscrit column
     *
     * Example usage:
     * <code>
     * $query->filterByNomEntrepriseInscrit('fooValue');   // WHERE nom_entreprise_inscrit = 'fooValue'
     * $query->filterByNomEntrepriseInscrit('%fooValue%'); // WHERE nom_entreprise_inscrit LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomEntrepriseInscrit The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByNomEntrepriseInscrit($nomEntrepriseInscrit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomEntrepriseInscrit)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomEntrepriseInscrit)) {
                $nomEntrepriseInscrit = str_replace('*', '%', $nomEntrepriseInscrit);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::NOM_ENTREPRISE_INSCRIT, $nomEntrepriseInscrit, $comparison);
    }

    /**
     * Filter the query on the nom_inscrit column
     *
     * Example usage:
     * <code>
     * $query->filterByNomInscrit('fooValue');   // WHERE nom_inscrit = 'fooValue'
     * $query->filterByNomInscrit('%fooValue%'); // WHERE nom_inscrit LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomInscrit The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByNomInscrit($nomInscrit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomInscrit)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomInscrit)) {
                $nomInscrit = str_replace('*', '%', $nomInscrit);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::NOM_INSCRIT, $nomInscrit, $comparison);
    }

    /**
     * Filter the query on the prenom_inscrit column
     *
     * Example usage:
     * <code>
     * $query->filterByPrenomInscrit('fooValue');   // WHERE prenom_inscrit = 'fooValue'
     * $query->filterByPrenomInscrit('%fooValue%'); // WHERE prenom_inscrit LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prenomInscrit The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByPrenomInscrit($prenomInscrit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prenomInscrit)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prenomInscrit)) {
                $prenomInscrit = str_replace('*', '%', $prenomInscrit);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::PRENOM_INSCRIT, $prenomInscrit, $comparison);
    }

    /**
     * Filter the query on the adresse_inscrit column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseInscrit('fooValue');   // WHERE adresse_inscrit = 'fooValue'
     * $query->filterByAdresseInscrit('%fooValue%'); // WHERE adresse_inscrit LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseInscrit The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByAdresseInscrit($adresseInscrit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseInscrit)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseInscrit)) {
                $adresseInscrit = str_replace('*', '%', $adresseInscrit);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::ADRESSE_INSCRIT, $adresseInscrit, $comparison);
    }

    /**
     * Filter the query on the adresse2_inscrit column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresse2Inscrit('fooValue');   // WHERE adresse2_inscrit = 'fooValue'
     * $query->filterByAdresse2Inscrit('%fooValue%'); // WHERE adresse2_inscrit LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresse2Inscrit The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByAdresse2Inscrit($adresse2Inscrit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresse2Inscrit)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresse2Inscrit)) {
                $adresse2Inscrit = str_replace('*', '%', $adresse2Inscrit);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::ADRESSE2_INSCRIT, $adresse2Inscrit, $comparison);
    }

    /**
     * Filter the query on the telephone_inscrit column
     *
     * Example usage:
     * <code>
     * $query->filterByTelephoneInscrit('fooValue');   // WHERE telephone_inscrit = 'fooValue'
     * $query->filterByTelephoneInscrit('%fooValue%'); // WHERE telephone_inscrit LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telephoneInscrit The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByTelephoneInscrit($telephoneInscrit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telephoneInscrit)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telephoneInscrit)) {
                $telephoneInscrit = str_replace('*', '%', $telephoneInscrit);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::TELEPHONE_INSCRIT, $telephoneInscrit, $comparison);
    }

    /**
     * Filter the query on the fax_inscrit column
     *
     * Example usage:
     * <code>
     * $query->filterByFaxInscrit('fooValue');   // WHERE fax_inscrit = 'fooValue'
     * $query->filterByFaxInscrit('%fooValue%'); // WHERE fax_inscrit LIKE '%fooValue%'
     * </code>
     *
     * @param     string $faxInscrit The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByFaxInscrit($faxInscrit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($faxInscrit)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $faxInscrit)) {
                $faxInscrit = str_replace('*', '%', $faxInscrit);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::FAX_INSCRIT, $faxInscrit, $comparison);
    }

    /**
     * Filter the query on the code_postal_inscrit column
     *
     * Example usage:
     * <code>
     * $query->filterByCodePostalInscrit('fooValue');   // WHERE code_postal_inscrit = 'fooValue'
     * $query->filterByCodePostalInscrit('%fooValue%'); // WHERE code_postal_inscrit LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codePostalInscrit The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByCodePostalInscrit($codePostalInscrit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codePostalInscrit)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codePostalInscrit)) {
                $codePostalInscrit = str_replace('*', '%', $codePostalInscrit);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::CODE_POSTAL_INSCRIT, $codePostalInscrit, $comparison);
    }

    /**
     * Filter the query on the ville_inscrit column
     *
     * Example usage:
     * <code>
     * $query->filterByVilleInscrit('fooValue');   // WHERE ville_inscrit = 'fooValue'
     * $query->filterByVilleInscrit('%fooValue%'); // WHERE ville_inscrit LIKE '%fooValue%'
     * </code>
     *
     * @param     string $villeInscrit The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByVilleInscrit($villeInscrit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($villeInscrit)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $villeInscrit)) {
                $villeInscrit = str_replace('*', '%', $villeInscrit);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::VILLE_INSCRIT, $villeInscrit, $comparison);
    }

    /**
     * Filter the query on the pays_inscrit column
     *
     * Example usage:
     * <code>
     * $query->filterByPaysInscrit('fooValue');   // WHERE pays_inscrit = 'fooValue'
     * $query->filterByPaysInscrit('%fooValue%'); // WHERE pays_inscrit LIKE '%fooValue%'
     * </code>
     *
     * @param     string $paysInscrit The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByPaysInscrit($paysInscrit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($paysInscrit)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $paysInscrit)) {
                $paysInscrit = str_replace('*', '%', $paysInscrit);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::PAYS_INSCRIT, $paysInscrit, $comparison);
    }

    /**
     * Filter the query on the acronyme_pays column
     *
     * Example usage:
     * <code>
     * $query->filterByAcronymePays('fooValue');   // WHERE acronyme_pays = 'fooValue'
     * $query->filterByAcronymePays('%fooValue%'); // WHERE acronyme_pays LIKE '%fooValue%'
     * </code>
     *
     * @param     string $acronymePays The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByAcronymePays($acronymePays = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($acronymePays)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $acronymePays)) {
                $acronymePays = str_replace('*', '%', $acronymePays);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::ACRONYME_PAYS, $acronymePays, $comparison);
    }

    /**
     * Filter the query on the siret_entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterBySiretEntreprise('fooValue');   // WHERE siret_entreprise = 'fooValue'
     * $query->filterBySiretEntreprise('%fooValue%'); // WHERE siret_entreprise LIKE '%fooValue%'
     * </code>
     *
     * @param     string $siretEntreprise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterBySiretEntreprise($siretEntreprise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($siretEntreprise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $siretEntreprise)) {
                $siretEntreprise = str_replace('*', '%', $siretEntreprise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::SIRET_ENTREPRISE, $siretEntreprise, $comparison);
    }

    /**
     * Filter the query on the identifiant_national column
     *
     * Example usage:
     * <code>
     * $query->filterByIdentifiantNational('fooValue');   // WHERE identifiant_national = 'fooValue'
     * $query->filterByIdentifiantNational('%fooValue%'); // WHERE identifiant_national LIKE '%fooValue%'
     * </code>
     *
     * @param     string $identifiantNational The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByIdentifiantNational($identifiantNational = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($identifiantNational)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $identifiantNational)) {
                $identifiantNational = str_replace('*', '%', $identifiantNational);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::IDENTIFIANT_NATIONAL, $identifiantNational, $comparison);
    }

    /**
     * Filter the query on the email_inscrit column
     *
     * Example usage:
     * <code>
     * $query->filterByEmailInscrit('fooValue');   // WHERE email_inscrit = 'fooValue'
     * $query->filterByEmailInscrit('%fooValue%'); // WHERE email_inscrit LIKE '%fooValue%'
     * </code>
     *
     * @param     string $emailInscrit The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByEmailInscrit($emailInscrit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($emailInscrit)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $emailInscrit)) {
                $emailInscrit = str_replace('*', '%', $emailInscrit);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::EMAIL_INSCRIT, $emailInscrit, $comparison);
    }

    /**
     * Filter the query on the siret_inscrit column
     *
     * Example usage:
     * <code>
     * $query->filterBySiretInscrit('fooValue');   // WHERE siret_inscrit = 'fooValue'
     * $query->filterBySiretInscrit('%fooValue%'); // WHERE siret_inscrit LIKE '%fooValue%'
     * </code>
     *
     * @param     string $siretInscrit The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterBySiretInscrit($siretInscrit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($siretInscrit)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $siretInscrit)) {
                $siretInscrit = str_replace('*', '%', $siretInscrit);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::SIRET_INSCRIT, $siretInscrit, $comparison);
    }

    /**
     * Filter the query on the nom_entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByNomEntreprise('fooValue');   // WHERE nom_entreprise = 'fooValue'
     * $query->filterByNomEntreprise('%fooValue%'); // WHERE nom_entreprise LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomEntreprise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByNomEntreprise($nomEntreprise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomEntreprise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomEntreprise)) {
                $nomEntreprise = str_replace('*', '%', $nomEntreprise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::NOM_ENTREPRISE, $nomEntreprise, $comparison);
    }

    /**
     * Filter the query on the horodatage_annulation column
     *
     * @param     mixed $horodatageAnnulation The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByHorodatageAnnulation($horodatageAnnulation = null, $comparison = null)
    {

        return $this->addUsingAlias(CommonOffresPeer::HORODATAGE_ANNULATION, $horodatageAnnulation, $comparison);
    }

    /**
     * Filter the query on the date_annulation column
     *
     * Example usage:
     * <code>
     * $query->filterByDateAnnulation('fooValue');   // WHERE date_annulation = 'fooValue'
     * $query->filterByDateAnnulation('%fooValue%'); // WHERE date_annulation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateAnnulation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByDateAnnulation($dateAnnulation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateAnnulation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateAnnulation)) {
                $dateAnnulation = str_replace('*', '%', $dateAnnulation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::DATE_ANNULATION, $dateAnnulation, $comparison);
    }

    /**
     * Filter the query on the signature_annulation column
     *
     * Example usage:
     * <code>
     * $query->filterBySignatureAnnulation('fooValue');   // WHERE signature_annulation = 'fooValue'
     * $query->filterBySignatureAnnulation('%fooValue%'); // WHERE signature_annulation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $signatureAnnulation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterBySignatureAnnulation($signatureAnnulation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($signatureAnnulation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $signatureAnnulation)) {
                $signatureAnnulation = str_replace('*', '%', $signatureAnnulation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::SIGNATURE_ANNULATION, $signatureAnnulation, $comparison);
    }

    /**
     * Filter the query on the depot_annule column
     *
     * Example usage:
     * <code>
     * $query->filterByDepotAnnule('fooValue');   // WHERE depot_annule = 'fooValue'
     * $query->filterByDepotAnnule('%fooValue%'); // WHERE depot_annule LIKE '%fooValue%'
     * </code>
     *
     * @param     string $depotAnnule The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByDepotAnnule($depotAnnule = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($depotAnnule)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $depotAnnule)) {
                $depotAnnule = str_replace('*', '%', $depotAnnule);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::DEPOT_ANNULE, $depotAnnule, $comparison);
    }

    /**
     * Filter the query on the string_annulation column
     *
     * Example usage:
     * <code>
     * $query->filterByStringAnnulation('fooValue');   // WHERE string_annulation = 'fooValue'
     * $query->filterByStringAnnulation('%fooValue%'); // WHERE string_annulation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $stringAnnulation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByStringAnnulation($stringAnnulation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($stringAnnulation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $stringAnnulation)) {
                $stringAnnulation = str_replace('*', '%', $stringAnnulation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::STRING_ANNULATION, $stringAnnulation, $comparison);
    }

    /**
     * Filter the query on the verification_certificat_annulation column
     *
     * Example usage:
     * <code>
     * $query->filterByVerificationCertificatAnnulation('fooValue');   // WHERE verification_certificat_annulation = 'fooValue'
     * $query->filterByVerificationCertificatAnnulation('%fooValue%'); // WHERE verification_certificat_annulation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $verificationCertificatAnnulation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByVerificationCertificatAnnulation($verificationCertificatAnnulation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($verificationCertificatAnnulation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $verificationCertificatAnnulation)) {
                $verificationCertificatAnnulation = str_replace('*', '%', $verificationCertificatAnnulation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::VERIFICATION_CERTIFICAT_ANNULATION, $verificationCertificatAnnulation, $comparison);
    }

    /**
     * Filter the query on the offre_variante column
     *
     * Example usage:
     * <code>
     * $query->filterByOffreVariante('fooValue');   // WHERE offre_variante = 'fooValue'
     * $query->filterByOffreVariante('%fooValue%'); // WHERE offre_variante LIKE '%fooValue%'
     * </code>
     *
     * @param     string $offreVariante The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByOffreVariante($offreVariante = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($offreVariante)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $offreVariante)) {
                $offreVariante = str_replace('*', '%', $offreVariante);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::OFFRE_VARIANTE, $offreVariante, $comparison);
    }

    /**
     * Filter the query on the reponse_pas_a_pas column
     *
     * Example usage:
     * <code>
     * $query->filterByReponsePasAPas('fooValue');   // WHERE reponse_pas_a_pas = 'fooValue'
     * $query->filterByReponsePasAPas('%fooValue%'); // WHERE reponse_pas_a_pas LIKE '%fooValue%'
     * </code>
     *
     * @param     string $reponsePasAPas The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByReponsePasAPas($reponsePasAPas = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reponsePasAPas)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $reponsePasAPas)) {
                $reponsePasAPas = str_replace('*', '%', $reponsePasAPas);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::REPONSE_PAS_A_PAS, $reponsePasAPas, $comparison);
    }

    /**
     * Filter the query on the numero_reponse column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeroReponse(1234); // WHERE numero_reponse = 1234
     * $query->filterByNumeroReponse(array(12, 34)); // WHERE numero_reponse IN (12, 34)
     * $query->filterByNumeroReponse(array('min' => 12)); // WHERE numero_reponse >= 12
     * $query->filterByNumeroReponse(array('max' => 12)); // WHERE numero_reponse <= 12
     * </code>
     *
     * @param     mixed $numeroReponse The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByNumeroReponse($numeroReponse = null, $comparison = null)
    {
        if (is_array($numeroReponse)) {
            $useMinMax = false;
            if (isset($numeroReponse['min'])) {
                $this->addUsingAlias(CommonOffresPeer::NUMERO_REPONSE, $numeroReponse['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($numeroReponse['max'])) {
                $this->addUsingAlias(CommonOffresPeer::NUMERO_REPONSE, $numeroReponse['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::NUMERO_REPONSE, $numeroReponse, $comparison);
    }

    /**
     * Filter the query on the statut_offres column
     *
     * Example usage:
     * <code>
     * $query->filterByStatutOffres(1234); // WHERE statut_offres = 1234
     * $query->filterByStatutOffres(array(12, 34)); // WHERE statut_offres IN (12, 34)
     * $query->filterByStatutOffres(array('min' => 12)); // WHERE statut_offres >= 12
     * $query->filterByStatutOffres(array('max' => 12)); // WHERE statut_offres <= 12
     * </code>
     *
     * @param     mixed $statutOffres The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByStatutOffres($statutOffres = null, $comparison = null)
    {
        if (is_array($statutOffres)) {
            $useMinMax = false;
            if (isset($statutOffres['min'])) {
                $this->addUsingAlias(CommonOffresPeer::STATUT_OFFRES, $statutOffres['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statutOffres['max'])) {
                $this->addUsingAlias(CommonOffresPeer::STATUT_OFFRES, $statutOffres['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::STATUT_OFFRES, $statutOffres, $comparison);
    }

    /**
     * Filter the query on the date_heure_ouverture column
     *
     * Example usage:
     * <code>
     * $query->filterByDateHeureOuverture('fooValue');   // WHERE date_heure_ouverture = 'fooValue'
     * $query->filterByDateHeureOuverture('%fooValue%'); // WHERE date_heure_ouverture LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateHeureOuverture The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByDateHeureOuverture($dateHeureOuverture = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateHeureOuverture)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateHeureOuverture)) {
                $dateHeureOuverture = str_replace('*', '%', $dateHeureOuverture);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::DATE_HEURE_OUVERTURE, $dateHeureOuverture, $comparison);
    }

    /**
     * Filter the query on the agentid_ouverture column
     *
     * Example usage:
     * <code>
     * $query->filterByAgentidOuverture(1234); // WHERE agentid_ouverture = 1234
     * $query->filterByAgentidOuverture(array(12, 34)); // WHERE agentid_ouverture IN (12, 34)
     * $query->filterByAgentidOuverture(array('min' => 12)); // WHERE agentid_ouverture >= 12
     * $query->filterByAgentidOuverture(array('max' => 12)); // WHERE agentid_ouverture <= 12
     * </code>
     *
     * @param     mixed $agentidOuverture The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByAgentidOuverture($agentidOuverture = null, $comparison = null)
    {
        if (is_array($agentidOuverture)) {
            $useMinMax = false;
            if (isset($agentidOuverture['min'])) {
                $this->addUsingAlias(CommonOffresPeer::AGENTID_OUVERTURE, $agentidOuverture['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($agentidOuverture['max'])) {
                $this->addUsingAlias(CommonOffresPeer::AGENTID_OUVERTURE, $agentidOuverture['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::AGENTID_OUVERTURE, $agentidOuverture, $comparison);
    }

    /**
     * Filter the query on the agentid_ouverture2 column
     *
     * Example usage:
     * <code>
     * $query->filterByAgentidOuverture2(1234); // WHERE agentid_ouverture2 = 1234
     * $query->filterByAgentidOuverture2(array(12, 34)); // WHERE agentid_ouverture2 IN (12, 34)
     * $query->filterByAgentidOuverture2(array('min' => 12)); // WHERE agentid_ouverture2 >= 12
     * $query->filterByAgentidOuverture2(array('max' => 12)); // WHERE agentid_ouverture2 <= 12
     * </code>
     *
     * @param     mixed $agentidOuverture2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByAgentidOuverture2($agentidOuverture2 = null, $comparison = null)
    {
        if (is_array($agentidOuverture2)) {
            $useMinMax = false;
            if (isset($agentidOuverture2['min'])) {
                $this->addUsingAlias(CommonOffresPeer::AGENTID_OUVERTURE2, $agentidOuverture2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($agentidOuverture2['max'])) {
                $this->addUsingAlias(CommonOffresPeer::AGENTID_OUVERTURE2, $agentidOuverture2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::AGENTID_OUVERTURE2, $agentidOuverture2, $comparison);
    }

    /**
     * Filter the query on the date_heure_ouverture_agent2 column
     *
     * Example usage:
     * <code>
     * $query->filterByDateHeureOuvertureAgent2('fooValue');   // WHERE date_heure_ouverture_agent2 = 'fooValue'
     * $query->filterByDateHeureOuvertureAgent2('%fooValue%'); // WHERE date_heure_ouverture_agent2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateHeureOuvertureAgent2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByDateHeureOuvertureAgent2($dateHeureOuvertureAgent2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateHeureOuvertureAgent2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateHeureOuvertureAgent2)) {
                $dateHeureOuvertureAgent2 = str_replace('*', '%', $dateHeureOuvertureAgent2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::DATE_HEURE_OUVERTURE_AGENT2, $dateHeureOuvertureAgent2, $comparison);
    }

    /**
     * Filter the query on the cryptage_reponse column
     *
     * Example usage:
     * <code>
     * $query->filterByCryptageReponse('fooValue');   // WHERE cryptage_reponse = 'fooValue'
     * $query->filterByCryptageReponse('%fooValue%'); // WHERE cryptage_reponse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cryptageReponse The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByCryptageReponse($cryptageReponse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cryptageReponse)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cryptageReponse)) {
                $cryptageReponse = str_replace('*', '%', $cryptageReponse);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::CRYPTAGE_REPONSE, $cryptageReponse, $comparison);
    }

    /**
     * Filter the query on the nom_agent_ouverture column
     *
     * Example usage:
     * <code>
     * $query->filterByNomAgentOuverture('fooValue');   // WHERE nom_agent_ouverture = 'fooValue'
     * $query->filterByNomAgentOuverture('%fooValue%'); // WHERE nom_agent_ouverture LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomAgentOuverture The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByNomAgentOuverture($nomAgentOuverture = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomAgentOuverture)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomAgentOuverture)) {
                $nomAgentOuverture = str_replace('*', '%', $nomAgentOuverture);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::NOM_AGENT_OUVERTURE, $nomAgentOuverture, $comparison);
    }

    /**
     * Filter the query on the agent_telechargement_offre column
     *
     * Example usage:
     * <code>
     * $query->filterByAgentTelechargementOffre(1234); // WHERE agent_telechargement_offre = 1234
     * $query->filterByAgentTelechargementOffre(array(12, 34)); // WHERE agent_telechargement_offre IN (12, 34)
     * $query->filterByAgentTelechargementOffre(array('min' => 12)); // WHERE agent_telechargement_offre >= 12
     * $query->filterByAgentTelechargementOffre(array('max' => 12)); // WHERE agent_telechargement_offre <= 12
     * </code>
     *
     * @param     mixed $agentTelechargementOffre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByAgentTelechargementOffre($agentTelechargementOffre = null, $comparison = null)
    {
        if (is_array($agentTelechargementOffre)) {
            $useMinMax = false;
            if (isset($agentTelechargementOffre['min'])) {
                $this->addUsingAlias(CommonOffresPeer::AGENT_TELECHARGEMENT_OFFRE, $agentTelechargementOffre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($agentTelechargementOffre['max'])) {
                $this->addUsingAlias(CommonOffresPeer::AGENT_TELECHARGEMENT_OFFRE, $agentTelechargementOffre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::AGENT_TELECHARGEMENT_OFFRE, $agentTelechargementOffre, $comparison);
    }

    /**
     * Filter the query on the date_telechargement_offre column
     *
     * Example usage:
     * <code>
     * $query->filterByDateTelechargementOffre('fooValue');   // WHERE date_telechargement_offre = 'fooValue'
     * $query->filterByDateTelechargementOffre('%fooValue%'); // WHERE date_telechargement_offre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateTelechargementOffre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByDateTelechargementOffre($dateTelechargementOffre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateTelechargementOffre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateTelechargementOffre)) {
                $dateTelechargementOffre = str_replace('*', '%', $dateTelechargementOffre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::DATE_TELECHARGEMENT_OFFRE, $dateTelechargementOffre, $comparison);
    }

    /**
     * Filter the query on the repertoire_telechargement_offre column
     *
     * Example usage:
     * <code>
     * $query->filterByRepertoireTelechargementOffre('fooValue');   // WHERE repertoire_telechargement_offre = 'fooValue'
     * $query->filterByRepertoireTelechargementOffre('%fooValue%'); // WHERE repertoire_telechargement_offre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $repertoireTelechargementOffre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByRepertoireTelechargementOffre($repertoireTelechargementOffre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($repertoireTelechargementOffre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $repertoireTelechargementOffre)) {
                $repertoireTelechargementOffre = str_replace('*', '%', $repertoireTelechargementOffre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::REPERTOIRE_TELECHARGEMENT_OFFRE, $repertoireTelechargementOffre, $comparison);
    }

    /**
     * Filter the query on the ifu_entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByIfuEntreprise('fooValue');   // WHERE ifu_entreprise = 'fooValue'
     * $query->filterByIfuEntreprise('%fooValue%'); // WHERE ifu_entreprise LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ifuEntreprise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByIfuEntreprise($ifuEntreprise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ifuEntreprise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ifuEntreprise)) {
                $ifuEntreprise = str_replace('*', '%', $ifuEntreprise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::IFU_ENTREPRISE, $ifuEntreprise, $comparison);
    }

    /**
     * Filter the query on the type_entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeEntreprise('fooValue');   // WHERE type_entreprise = 'fooValue'
     * $query->filterByTypeEntreprise('%fooValue%'); // WHERE type_entreprise LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeEntreprise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function filterByTypeEntreprise($typeEntreprise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeEntreprise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeEntreprise)) {
                $typeEntreprise = str_replace('*', '%', $typeEntreprise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffresPeer::TYPE_ENTREPRISE, $typeEntreprise, $comparison);
    }

    /**
     * Filter the query by a related CommonConsultation object
     *
     * @param   CommonConsultation $commonConsultation The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonOffresQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonConsultation($commonConsultation, $comparison = null)
    {
        if ($commonConsultation instanceof CommonConsultation) {
            return $this
                ->addUsingAlias(CommonOffresPeer::ORGANISME, $commonConsultation->getOrganisme(), $comparison)
                ->addUsingAlias(CommonOffresPeer::CONSULTATION_REF, $commonConsultation->getReference(), $comparison);
        } else {
            throw new PropelException('filterByCommonConsultation() only accepts arguments of type CommonConsultation');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonConsultation relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function joinCommonConsultation($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonConsultation');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonConsultation');
        }

        return $this;
    }

    /**
     * Use the CommonConsultation relation CommonConsultation object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonConsultationQuery A secondary query class using the current class as primary query
     */
    public function useCommonConsultationQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonConsultation($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonConsultation', 'CommonConsultationQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonOffres $commonOffres Object to remove from the list of results
     *
     * @return CommonOffresQuery The current query, for fluid interface
     */
    public function prune($commonOffres = null)
    {
        if ($commonOffres) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonOffresPeer::ID), $commonOffres->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonOffresPeer::ORGANISME), $commonOffres->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
