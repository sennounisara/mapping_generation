<?php



/**
 * This class defines the structure of the 'questions_dce' table.
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
class CommonQuestionsDceTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonQuestionsDceTableMap';

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
        $this->setName('questions_dce');
        $this->setPhpName('CommonQuestionsDce');
        $this->setClassname('CommonQuestionsDce');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, 22, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, '');
        $this->addColumn('consultation_ref', 'ConsultationRef', 'INTEGER', true, null, 0);
        $this->addColumn('date_depot', 'DateDepot', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('email', 'Email', 'VARCHAR', true, 100, '');
        $this->addColumn('nom', 'Nom', 'VARCHAR', false, 80, null);
        $this->addColumn('entreprise', 'Entreprise', 'VARCHAR', false, 50, null);
        $this->addColumn('adresse', 'Adresse', 'VARCHAR', false, 200, null);
        $this->addColumn('cp', 'Cp', 'VARCHAR', false, 100, null);
        $this->addColumn('ville', 'Ville', 'VARCHAR', false, 150, null);
        $this->addColumn('tel', 'Tel', 'VARCHAR', false, 150, null);
        $this->addColumn('fax', 'Fax', 'VARCHAR', false, 150, null);
        $this->addColumn('question', 'Question', 'CLOB', true, null, null);
        $this->addColumn('statut', 'Statut', 'INTEGER', true, null, 0);
        $this->addColumn('date_reponse', 'DateReponse', 'DATE', true, null, '0000-00-00');
        $this->addColumn('personne_repondu', 'PersonneRepondu', 'LONGVARCHAR', false, null, null);
        $this->addColumn('type_depot', 'TypeDepot', 'CHAR', true, null, '1');
        $this->getColumn('type_depot', false)->setValueSet(array (
  0 => '1',
  1 => '2',
));
        $this->addColumn('pays', 'Pays', 'VARCHAR', false, 150, null);
        $this->addColumn('Observation', 'Observation', 'LONGVARCHAR', false, null, null);
        $this->addColumn('siret', 'Siret', 'VARCHAR', false, 14, null);
        $this->addColumn('identifiant_national', 'IdentifiantNational', 'VARCHAR', false, 20, null);
        $this->addColumn('acronyme_pays', 'AcronymePays', 'VARCHAR', false, 10, null);
        $this->addColumn('adresse2', 'Adresse2', 'VARCHAR', false, 80, null);
        $this->addColumn('id_fichier', 'IdFichier', 'INTEGER', false, null, null);
        $this->addColumn('nom_fichier', 'NomFichier', 'VARCHAR', false, 100, null);
        $this->addColumn('prenom', 'Prenom', 'VARCHAR', false, 80, null);
        $this->addColumn('siret_etranger', 'SiretEtranger', 'VARCHAR', false, 20, null);
        $this->addColumn('id_inscrit', 'IdInscrit', 'INTEGER', true, null, 0);
        $this->addColumn('id_entreprise', 'IdEntreprise', 'INTEGER', true, null, 0);
        $this->addColumn('ifu', 'Ifu', 'VARCHAR', false, 200, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonQuestionsDceTableMap
