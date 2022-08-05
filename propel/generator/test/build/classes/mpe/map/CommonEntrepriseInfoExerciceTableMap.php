<?php



/**
 * This class defines the structure of the 'Entreprise_info_exercice' table.
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
class CommonEntrepriseInfoExerciceTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonEntrepriseInfoExerciceTableMap';

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
        $this->setName('Entreprise_info_exercice');
        $this->setPhpName('CommonEntrepriseInfoExercice');
        $this->setClassname('CommonEntrepriseInfoExercice');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('id_Entreprise', 'IdEntreprise', 'INTEGER', true, null, 0);
        $this->addColumn('debutExerciceGlob', 'Debutexerciceglob', 'VARCHAR', false, 15, null);
        $this->addColumn('finExerciceGlob', 'Finexerciceglob', 'VARCHAR', false, 15, null);
        $this->addColumn('ventesGlob', 'Ventesglob', 'VARCHAR', false, 10, '0');
        $this->addColumn('biensGlob', 'Biensglob', 'VARCHAR', false, 10, '0');
        $this->addColumn('servicesGlob', 'Servicesglob', 'VARCHAR', false, 10, '0');
        $this->addColumn('totalGlob', 'Totalglob', 'VARCHAR', false, 10, '0');
        $this->addPrimaryKey('annee_cloture_exercice', 'AnneeClotureExercice', 'VARCHAR', true, 15, '');
        $this->addColumn('effectif_moyen', 'EffectifMoyen', 'INTEGER', false, 10, 0);
        $this->addColumn('effectif_encadrement', 'EffectifEncadrement', 'INTEGER', false, 10, 0);
        $this->addColumn('pme', 'Pme', 'CHAR', false, null, null);
        $this->getColumn('pme', false)->setValueSet(array (
  0 => '1',
  1 => '0',
));
        $this->addColumn('chiffre_affaires', 'ChiffreAffaires', 'VARCHAR', false, 255, null);
        $this->addColumn('besoin_excedent_financement', 'BesoinExcedentFinancement', 'VARCHAR', false, 255, null);
        $this->addColumn('cash_flow', 'CashFlow', 'VARCHAR', false, 255, null);
        $this->addColumn('capacite_endettement', 'CapaciteEndettement', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonEntrepriseInfoExerciceTableMap
