<?php



/**
 * This class defines the structure of the 'Offres' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.mpe.map
 */
class CommonOffresTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonOffresTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('Offres');
        $this->setPhpName('CommonOffres');
        $this->setClassname('CommonOffres');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, 22, null);
        $this->addForeignPrimaryKey('organisme', 'Organisme', 'VARCHAR' , 'consultation', 'organisme', true, 30, '');
        $this->addForeignKey('consultation_ref', 'ConsultationRef', 'INTEGER', 'consultation', 'reference', true, null, 0);
        $this->addColumn('entreprise_id', 'EntrepriseId', 'INTEGER', true, 22, 0);
        $this->addColumn('inscrit_id', 'InscritId', 'INTEGER', true, 22, 0);
        $this->addColumn('signatureenvxml', 'Signatureenvxml', 'BLOB', true, null, null);
        $this->addColumn('horodatage', 'Horodatage', 'BLOB', true, null, null);
        $this->addColumn('mailsignataire', 'Mailsignataire', 'VARCHAR', true, 80, '');
        $this->addColumn('untrusteddate', 'Untrusteddate', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('untrustedserial', 'Untrustedserial', 'VARCHAR', true, 40, '');
        $this->addColumn('envoi_complet', 'EnvoiComplet', 'CHAR', true, null, '');
        $this->addColumn('date_depot_differe', 'DateDepotDiffere', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('horodatage_envoi_differe', 'HorodatageEnvoiDiffere', 'BLOB', true, null, null);
        $this->addColumn('signatureenvxml_envoi_differe', 'SignatureenvxmlEnvoiDiffere', 'BLOB', true, null, null);
        $this->addColumn('external_serial', 'ExternalSerial', 'VARCHAR', false, 8, null);
        $this->addColumn('internal_serial', 'InternalSerial', 'VARCHAR', false, 8, null);
        $this->addColumn('uid_offre', 'UidOffre', 'VARCHAR', true, 40, '');
        $this->addColumn('offre_selectionnee', 'OffreSelectionnee', 'INTEGER', true, null, 0);
        $this->addColumn('Observation', 'Observation', 'LONGVARCHAR', false, null, null);
        $this->addColumn('xml_string', 'XmlString', 'CLOB', true, null, null);
        $this->addColumn('nom_entreprise_inscrit', 'NomEntrepriseInscrit', 'VARCHAR', false, 30, null);
        $this->addColumn('nom_inscrit', 'NomInscrit', 'VARCHAR', false, 80, null);
        $this->addColumn('prenom_inscrit', 'PrenomInscrit', 'VARCHAR', false, 80, null);
        $this->addColumn('adresse_inscrit', 'AdresseInscrit', 'VARCHAR', false, 100, null);
        $this->addColumn('adresse2_inscrit', 'Adresse2Inscrit', 'VARCHAR', false, 100, null);
        $this->addColumn('telephone_inscrit', 'TelephoneInscrit', 'VARCHAR', false, 20, null);
        $this->addColumn('fax_inscrit', 'FaxInscrit', 'VARCHAR', false, 30, null);
        $this->addColumn('code_postal_inscrit', 'CodePostalInscrit', 'VARCHAR', false, 5, null);
        $this->addColumn('ville_inscrit', 'VilleInscrit', 'VARCHAR', false, 50, null);
        $this->addColumn('pays_inscrit', 'PaysInscrit', 'VARCHAR', false, 50, null);
        $this->addColumn('acronyme_pays', 'AcronymePays', 'VARCHAR', false, 10, null);
        $this->addColumn('siret_entreprise', 'SiretEntreprise', 'VARCHAR', false, 14, null);
        $this->addColumn('identifiant_national', 'IdentifiantNational', 'VARCHAR', false, 20, null);
        $this->addColumn('email_inscrit', 'EmailInscrit', 'VARCHAR', false, 100, null);
        $this->addColumn('siret_inscrit', 'SiretInscrit', 'VARCHAR', false, 14, null);
        $this->addColumn('nom_entreprise', 'NomEntreprise', 'VARCHAR', false, 30, null);
        $this->addColumn('horodatage_annulation', 'HorodatageAnnulation', 'BLOB', false, null, null);
        $this->addColumn('date_annulation', 'DateAnnulation', 'VARCHAR', false, 20, null);
        $this->addColumn('signature_annulation', 'SignatureAnnulation', 'LONGVARCHAR', false, null, null);
        $this->addColumn('depot_annule', 'DepotAnnule', 'CHAR', false, null, '0');
        $this->getColumn('depot_annule', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('string_annulation', 'StringAnnulation', 'LONGVARCHAR', false, null, null);
        $this->addColumn('verification_certificat_annulation', 'VerificationCertificatAnnulation', 'VARCHAR', false, 5, null);
        $this->addColumn('offre_variante', 'OffreVariante', 'CHAR', false, null, null);
        $this->getColumn('offre_variante', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('reponse_pas_a_pas', 'ReponsePasAPas', 'CHAR', true, null, '0');
        $this->getColumn('reponse_pas_a_pas', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('numero_reponse', 'NumeroReponse', 'INTEGER', true, null, null);
        $this->addColumn('statut_offres', 'StatutOffres', 'INTEGER', false, 2, null);
        $this->addColumn('date_heure_ouverture', 'DateHeureOuverture', 'VARCHAR', true, 20, '0000-00-00 00:00:00');
        $this->addColumn('agentid_ouverture', 'AgentidOuverture', 'INTEGER', false, null, null);
        $this->addColumn('agentid_ouverture2', 'AgentidOuverture2', 'INTEGER', false, null, null);
        $this->addColumn('date_heure_ouverture_agent2', 'DateHeureOuvertureAgent2', 'VARCHAR', true, 20, '0000-00-00 00:00:00');
        $this->addColumn('cryptage_reponse', 'CryptageReponse', 'CHAR', true, null, '1');
        $this->addColumn('nom_agent_ouverture', 'NomAgentOuverture', 'VARCHAR', false, 100, null);
        $this->addColumn('agent_telechargement_offre', 'AgentTelechargementOffre', 'INTEGER', false, null, null);
        $this->addColumn('date_telechargement_offre', 'DateTelechargementOffre', 'VARCHAR', false, 20, null);
        $this->addColumn('repertoire_telechargement_offre', 'RepertoireTelechargementOffre', 'VARCHAR', false, 100, null);
        $this->addColumn('ifu_entreprise', 'IfuEntreprise', 'VARCHAR', false, 100, null);
        $this->addColumn('type_entreprise', 'TypeEntreprise', 'CHAR', false, null, null);
        $this->getColumn('type_entreprise', false)->setValueSet(array (
  0 => '0',
  1 => '1',
  2 => '2',
  3 => '3',
));
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonConsultation', 'CommonConsultation', RelationMap::MANY_TO_ONE, array('organisme' => 'organisme', 'consultation_ref' => 'reference', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // CommonOffresTableMap
