<?php



/**
 * This class defines the structure of the 'Retrait_Papier' table.
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
class CommonRetraitPapierTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonRetraitPapierTableMap';

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
        $this->setName('Retrait_Papier');
        $this->setPhpName('CommonRetraitPapier');
        $this->setClassname('CommonRetraitPapier');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, 22, null);
        $this->addForeignPrimaryKey('organisme', 'Organisme', 'VARCHAR' , 'consultation', 'organisme', true, 30, '');
        $this->addForeignKey('consultation_ref', 'ConsultationRef', 'INTEGER', 'consultation', 'reference', true, null, 0);
        $this->addColumn('nom', 'Nom', 'VARCHAR', true, 100, '');
        $this->addColumn('adresse', 'Adresse', 'VARCHAR', true, 100, '');
        $this->addColumn('entreprise', 'Entreprise', 'VARCHAR', true, 100, '');
        $this->addColumn('datetelechargement', 'Datetelechargement', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('codepostal', 'Codepostal', 'VARCHAR', true, 5, '0');
        $this->addColumn('ville', 'Ville', 'VARCHAR', true, 50, '');
        $this->addColumn('pays', 'Pays', 'VARCHAR', true, 50, '');
        $this->addColumn('telephone', 'Telephone', 'VARCHAR', true, 20, '');
        $this->addColumn('tirage_plan', 'TiragePlan', 'INTEGER', true, null, 0);
        $this->addColumn('siret', 'Siret', 'VARCHAR', false, 14, null);
        $this->addColumn('fax', 'Fax', 'VARCHAR', true, 30, '');
        $this->addColumn('email', 'Email', 'VARCHAR', true, 100, '');
        $this->addColumn('Observation', 'Observation', 'LONGVARCHAR', false, null, null);
        $this->addColumn('prenom', 'Prenom', 'VARCHAR', false, 100, null);
        $this->addColumn('adresse2', 'Adresse2', 'VARCHAR', false, 100, null);
        $this->addColumn('identifiant_national', 'IdentifiantNational', 'VARCHAR', false, 20, null);
        $this->addColumn('acronyme_pays', 'AcronymePays', 'VARCHAR', false, 10, null);
        $this->addColumn('support', 'Support', 'CHAR', true, null, '1');
        $this->getColumn('support', false)->setValueSet(array (
  0 => '1',
  1 => '2',
  2 => '3',
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

} // CommonRetraitPapierTableMap
