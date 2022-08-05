<?php



/**
 * This class defines the structure of the 'Offre_papier' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lt_parapheur.map
 */
class CommonOffrePapierTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonOffrePapierTableMap';

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
        $this->setName('Offre_papier');
        $this->setPhpName('CommonOffrePapier');
        $this->setClassname('CommonOffrePapier');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addForeignPrimaryKey('organisme', 'Organisme', 'VARCHAR' , 'consultation', 'organisme', true, 30, '');
        $this->addForeignKey('consultation_ref', 'ConsultationRef', 'INTEGER', 'consultation', 'reference', true, null, 0);
        $this->addColumn('nom_entreprise', 'NomEntreprise', 'VARCHAR', true, 30, '');
        $this->addColumn('date_depot', 'DateDepot', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('external_serial', 'ExternalSerial', 'VARCHAR', false, 8, null);
        $this->addColumn('internal_serial', 'InternalSerial', 'VARCHAR', false, 8, null);
        $this->addColumn('offre_selectionnee', 'OffreSelectionnee', 'INTEGER', true, null, 0);
        $this->addColumn('nom', 'Nom', 'VARCHAR', false, 80, null);
        $this->addColumn('prenom', 'Prenom', 'VARCHAR', false, 80, null);
        $this->addColumn('adresse', 'Adresse', 'VARCHAR', false, 100, null);
        $this->addColumn('adresse2', 'Adresse2', 'VARCHAR', false, 100, null);
        $this->addColumn('telephone', 'Telephone', 'VARCHAR', false, 20, null);
        $this->addColumn('fax', 'Fax', 'VARCHAR', false, 30, null);
        $this->addColumn('code_postal', 'CodePostal', 'VARCHAR', false, 5, null);
        $this->addColumn('ville', 'Ville', 'VARCHAR', false, 50, null);
        $this->addColumn('pays', 'Pays', 'VARCHAR', false, 50, null);
        $this->addColumn('acronyme_pays', 'AcronymePays', 'VARCHAR', false, 10, null);
        $this->addColumn('siret', 'Siret', 'VARCHAR', false, 14, null);
        $this->addColumn('identifiant_national', 'IdentifiantNational', 'VARCHAR', false, 20, null);
        $this->addColumn('email', 'Email', 'VARCHAR', false, 100, null);
        $this->addColumn('observation', 'Observation', 'LONGVARCHAR', false, null, null);
        $this->addColumn('date_annulation', 'DateAnnulation', 'VARCHAR', false, 20, null);
        $this->addColumn('depot_annule', 'DepotAnnule', 'CHAR', true, null, '0');
        $this->getColumn('depot_annule', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('offre_variante', 'OffreVariante', 'CHAR', false, null, null);
        $this->getColumn('offre_variante', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('statut_offre_papier', 'StatutOffrePapier', 'INTEGER', true, 2, 1);
        $this->addColumn('numero_reponse', 'NumeroReponse', 'INTEGER', false, null, null);
        $this->addColumn('nom_agent_ouverture', 'NomAgentOuverture', 'VARCHAR', false, 100, null);
        $this->addColumn('agent_id_ouverture', 'AgentIdOuverture', 'INTEGER', false, null, null);
        $this->addColumn('dateheure_ouverture', 'DateheureOuverture', 'VARCHAR', true, 20, '0000-00-00 00:00:00');
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

} // CommonOffrePapierTableMap
