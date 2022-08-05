<?php



/**
 * This class defines the structure of the 'Telechargement' table.
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
class CommonTelechargementTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonTelechargementTableMap';

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
        $this->setName('Telechargement');
        $this->setPhpName('CommonTelechargement');
        $this->setClassname('CommonTelechargement');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, 22, null);
        $this->addForeignPrimaryKey('organisme', 'Organisme', 'VARCHAR' , 'consultation', 'organisme', true, 30, '');
        $this->addForeignKey('consultation_ref', 'ConsultationRef', 'INTEGER', 'consultation', 'reference', true, null, null);
        $this->addColumn('datetelechargement', 'Datetelechargement', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('tirage_plan', 'TiragePlan', 'INTEGER', true, null, 0);
        $this->addColumn('id_inscrit', 'IdInscrit', 'INTEGER', false, null, 0);
        $this->addColumn('id_entreprise', 'IdEntreprise', 'INTEGER', false, null, 0);
        $this->addColumn('support', 'Support', 'CHAR', true, null, '1');
        $this->getColumn('support', false)->setValueSet(array (
  0 => '1',
  1 => '2',
  2 => '3',
));
        $this->addColumn('nom', 'Nom', 'VARCHAR', true, 100, '');
        $this->addColumn('adresse', 'Adresse', 'VARCHAR', true, 100, '');
        $this->addColumn('email', 'Email', 'VARCHAR', true, 100, '');
        $this->addColumn('entreprise', 'Entreprise', 'VARCHAR', true, 100, '');
        $this->addColumn('codepostal', 'Codepostal', 'VARCHAR', true, 5, '0');
        $this->addColumn('ville', 'Ville', 'VARCHAR', true, 50, '');
        $this->addColumn('pays', 'Pays', 'VARCHAR', false, 50, null);
        $this->addColumn('telephone', 'Telephone', 'VARCHAR', true, 20, '');
        $this->addColumn('siret', 'Siret', 'VARCHAR', true, 14, '');
        $this->addColumn('fax', 'Fax', 'VARCHAR', true, 30, '');
        $this->addColumn('lots', 'Lots', 'VARCHAR', false, 255, '');
        $this->addColumn('sirenEtranger', 'Sirenetranger', 'VARCHAR', false, 20, '0');
        $this->addColumn('adresse2', 'Adresse2', 'VARCHAR', true, 80, '0');
        $this->addColumn('prenom', 'Prenom', 'VARCHAR', false, 11, '');
        $this->addColumn('noms_fichiers_dce', 'NomsFichiersDce', 'LONGVARCHAR', false, null, null);
        $this->addColumn('Observation', 'Observation', 'LONGVARCHAR', false, null, null);
        $this->addColumn('acronyme_pays', 'AcronymePays', 'VARCHAR', false, 10, null);
        $this->addColumn('ifu', 'Ifu', 'VARCHAR', false, 200, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonConsultation', 'CommonConsultation', RelationMap::MANY_TO_ONE, array('organisme' => 'organisme', 'consultation_ref' => 'reference', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // CommonTelechargementTableMap
